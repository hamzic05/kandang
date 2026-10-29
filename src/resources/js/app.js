import './bootstrap';
import './auth';

document.addEventListener("DOMContentLoaded", function () { 
  /**
   * @param {MouseEvent} event
   * @param {HTMLElement} sideBarElement 
   */
  function toggleSidebar (event, sideBarElement) {
    const navToggle = event.target.closest("#ham_btn, #close_ham_btn");
    const sideBarClose = sideBarElement.classList.contains("translate-x-full");

    if (navToggle) {
        sideBarElement.classList.toggle("translate-x-full");
    }

    if (!sideBarClose && !sideBarElement.contains(event.target)) {
        sideBarElement.classList.add("translate-x-full");
    }
  }

  const sideBar = document.querySelector("#side_bar");
  document.addEventListener('click', (event) => {
    if (!sideBar) return;
    toggleSidebar(event, sideBar);
  });  
})

/*dashboard admin*/

const root = document.querySelector("[data-dashboard]");

if (root) {
  /* ---------- Gaya per status (kelas lengkap, terbaca oleh Tailwind) ---------- */
  const TONE = {
    baik: {
      label: "Baik",
      angka: "text-hijau",
      isi: "bg-hijau",
      lencana: "bg-hijau-muda text-hijau",
    },
    pantau: {
      label: "Pantau",
      angka: "text-kuning",
      isi: "bg-kuning",
      lencana: "bg-kuning-muda text-kuning",
    },
    cek: {
      label: "Cek",
      angka: "text-merah",
      isi: "bg-merah",
      lencana: "bg-merah-muda text-merah",
    },
  };

  const KELAS = {
    kartuKamar: "kartu p-[18px]",
    namaKamar: "font-display text-xl font-bold text-tinta",
    lencana: "inline-block rounded-full px-2.5 py-1 text-xs font-semibold",
    angkaKamar: "angka-judul mt-2.5 text-4xl leading-tight",
    metaKamar: "text-[13px] text-teks-redup",
    jalur: "mt-3 h-2 overflow-hidden rounded bg-jalur",
    isiJalur: "h-full rounded transition-[width] duration-500 ease-out motion-reduce:transition-none",

    garisTarget: "pointer-events-none absolute inset-x-0 border-t border-dashed border-garis-tua",
    labelTarget: "absolute bottom-0.5 right-0 text-[11px] text-teks-redup",
    batang:
      "group relative min-w-0 flex-1 rounded-t outline-offset-2 transition-[height,opacity] duration-500 hover:opacity-85 focus-visible:opacity-85 focus-visible:outline-2 focus-visible:outline-hijau motion-reduce:transition-none",
    batangNormal: "bg-hijau",
    batangRendah: "bg-kuning-batang",
    tip: "pointer-events-none absolute bottom-[calc(100%+6px)] left-1/2 z-10 -translate-x-1/2 whitespace-nowrap rounded-md bg-tinta px-2 py-1 text-xs text-white opacity-0 transition-opacity group-hover:opacity-100 group-focus-visible:opacity-100",
    labelHari: "min-w-0 flex-1 text-center text-xs text-teks-redup",

    daftarPeringatan: "flex flex-col gap-2.5",
    peringatan: "rounded-[10px] px-3.5 py-3 text-sm leading-snug",
    peringatanKritis: "bg-merah-muda text-merah-tua",
    peringatanWaspada: "bg-kuning-muda text-kuning-tua",
    kamarPeringatan: "block font-semibold",
    kosong: "rounded-[10px] bg-hijau-muda px-3.5 py-3.5 text-sm text-hijau",
  };

  /* ---------- Utilitas ---------- */
  // Dicari di seluruh dokumen, supaya footer (di luar <main>) ikut terjangkau.
  const part = (name) => document.querySelector(`[data-dash="${name}"]`);

  function make(tag, className = "", text) {
    const node = document.createElement(tag);
    if (className) node.className = className;
    if (text !== undefined) node.textContent = text; // aman dari XSS
    return node;
  }

  const num = (v) => (Number.isFinite(Number(v)) ? Number(v) : 0);
  const fmtInt = new Intl.NumberFormat("id-ID", { maximumFractionDigits: 0 });
  const fmtOne = new Intl.NumberFormat("id-ID", { maximumFractionDigits: 1 });

  // "2026-10-23" menjadi Date lokal (hindari geser zona waktu)
  function parseDate(iso) {
    const m = /^(\d{4})-(\d{2})-(\d{2})/.exec(String(iso ?? ""));
    return m ? new Date(Number(m[1]), Number(m[2]) - 1, Number(m[3])) : null;
  }

  const formatDate = (iso) => {
    const d = parseDate(iso);
    return d
      ? new Intl.DateTimeFormat("id-ID", { weekday: "long", day: "numeric", month: "short", year: "numeric" }).format(d)
      : "";
  };

  /* ---------- Aturan status kamar ---------- */
  // Baik: HD di atas target. Pantau: sampai 5 poin di bawah target.
  // Cek: lebih rendah dari itu, atau kematian melewati batas.
  function statusKamar(k, cfg) {
    const hd = num(k.hd_pct);
    if (num(k.ayam_mati) > cfg.batasMati || hd < cfg.targetHd - 5) return "cek";
    if (hd < cfg.targetHd) return "pantau";
    return "baik";
  }

  /* ---------- Render ---------- */
  function renderKpi(rooms, cfg) {
    let telur = 0, populasi = 0, mati = 0, perluCek = 0;
    for (const k of rooms) {
      telur += num(k.total_telur);
      populasi += num(k.populasi);
      mati += num(k.ayam_mati);
      if (statusKamar(k, cfg) !== "baik") perluCek += 1;
    }
    const hd = populasi > 0 ? (telur / populasi) * 100 : 0;
    const set = (name, text) => { const n = part(name); if (n) n.textContent = text; };

    set("kpi-telur", fmtInt.format(telur));
    set("kpi-hd", `${fmtOne.format(hd)}%`);
    set("kpi-mati", fmtInt.format(mati));
    set("kpi-cek", fmtInt.format(perluCek));

    // Kartu "perlu dicek" berwarna kuning bila ada kamar bermasalah
    const kartu = part("kpi-cek-card");
    if (kartu) {
      const warn = perluCek > 0;
      kartu.classList.toggle("bg-kuning-muda", warn);
      kartu.classList.toggle("border-[#f4e1bd]", warn);
      kartu.classList.toggle("bg-white", !warn);
      kartu.classList.toggle("border-garis", !warn);
      part("kpi-cek")?.classList.toggle("text-kuning", warn);
      part("kpi-cek")?.classList.toggle("text-tinta", !warn);
    }
  }

  function renderRooms(rooms, cfg) {
    const wrap = part("kamar");
    if (!wrap) return;
    wrap.replaceChildren();

    for (const k of rooms) {
      const st = statusKamar(k, cfg);
      const tone = TONE[st];
      const hd = num(k.hd_pct);

      const card = make("article", KELAS.kartuKamar);

      const head = make("div", "flex items-center justify-between");
      head.append(
        make("h2", KELAS.namaKamar, `Kamar ${k.kamar}`),
        make("span", `${KELAS.lencana} ${tone.lencana}`, tone.label),
      );

      const angka = make("div", `${KELAS.angkaKamar} ${tone.angka}`, `${fmtInt.format(Math.round(hd))}%`);
      const meta = make("div", KELAS.metaKamar, `Populasi ${fmtInt.format(num(k.populasi))} · mati hari ini ${fmtInt.format(num(k.ayam_mati))}`);

      const jalur = make("div", KELAS.jalur);
      jalur.setAttribute("role", "progressbar");
      jalur.setAttribute("aria-label", `Produksi Kamar ${k.kamar}`);
      jalur.setAttribute("aria-valuemin", "0");
      jalur.setAttribute("aria-valuemax", "100");
      jalur.setAttribute("aria-valuenow", String(Math.round(hd)));
      const isi = make("div", `${KELAS.isiJalur} ${tone.isi}`);
      isi.style.width = `${Math.max(0, Math.min(100, hd))}%`;
      jalur.append(isi);

      card.append(head, angka, meta, jalur);
      wrap.append(card);
    }
  }

  function renderChart(series, cfg) {
    const plot = part("grafik");
    const labels = part("grafik-label");
    if (!plot || !labels) return;
    plot.replaceChildren();
    labels.replaceChildren();

    const target = make("div", KELAS.garisTarget);
    target.style.bottom = `${cfg.targetHd}%`;
    target.setAttribute("aria-hidden", "true");
    target.append(make("span", KELAS.labelTarget, `target ${fmtInt.format(cfg.targetHd)}%`));
    plot.append(target);

    const nilai = [];
    for (const p of series) {
      const hd = num(p.hd);
      const d = parseDate(p.tanggal);
      const teksTanggal = d ? new Intl.DateTimeFormat("id-ID", { day: "numeric", month: "short" }).format(d) : String(p.tanggal);

      const bar = make("div", `${KELAS.batang} ${hd < cfg.targetHd ? KELAS.batangRendah : KELAS.batangNormal}`);
      bar.style.height = `${Math.max(0, Math.min(100, hd))}%`;
      bar.tabIndex = 0;
      bar.setAttribute("role", "img");
      bar.setAttribute("aria-label", `${teksTanggal}, produksi ${fmtOne.format(hd)} persen`);
      bar.append(make("span", KELAS.tip, `${teksTanggal}: ${fmtOne.format(hd)}%`));
      plot.append(bar);

      labels.append(make("span", KELAS.labelHari, d ? String(d.getDate()) : ""));
      nilai.push(hd);
    }

    plot.setAttribute("role", "group");
    plot.setAttribute(
      "aria-label",
      `Produksi ${series.length} hari terakhir, terendah ${fmtOne.format(nilai.length ? Math.min(...nilai) : 0)} persen, tertinggi ${fmtOne.format(nilai.length ? Math.max(...nilai) : 0)} persen`,
    );
  }

  function renderAlerts(items) {
    const wrap = part("peringatan");
    if (!wrap) return;
    wrap.replaceChildren();

    if (!items.length) {
      wrap.append(make("p", KELAS.kosong, "Tidak ada peringatan hari ini."));
      return;
    }

    const list = make("ul", KELAS.daftarPeringatan);
    for (const a of items) {
      const kritis = String(a.tingkat).toLowerCase() === "kritis";
      const li = make("li", `${KELAS.peringatan} ${kritis ? KELAS.peringatanKritis : KELAS.peringatanWaspada}`);
      li.append(make("span", KELAS.kamarPeringatan, `Kamar ${a.kamar}`), document.createTextNode(a.pesan));
      list.append(li);
    }
    wrap.append(list);
  }

  function render(data) {
    const cfg = {
      targetHd: num(data.target_hd) || 85,
      batasMati: data.batas_mati === undefined ? 3 : num(data.batas_mati),
    };
    const rooms = Array.isArray(data.status) ? data.status : [];

    const tgl = part("tanggal");
    if (tgl) tgl.textContent = formatDate(data.tanggal);

    renderKpi(rooms, cfg);
    renderRooms(rooms, cfg);
    renderChart(Array.isArray(data.grafik) ? data.grafik : [], cfg);
    renderAlerts(Array.isArray(data.peringatan) ? data.peringatan : []);
    renderFooter(true);
    root.removeAttribute("aria-busy");
  }

  /* ---------- Footer: tahun, status koneksi, jam pembaruan ---------- */
  const jamFmt = new Intl.DateTimeFormat("id-ID", { hour: "2-digit", minute: "2-digit", timeZone: "Asia/Jakarta" });

  function renderFooter(ok) {
    const tahun = part("tahun");
    if (tahun) tahun.textContent = String(new Date().getFullYear());

    const titik = part("status-dot");
    const teks = part("status-teks");
    if (titik) {
      titik.classList.toggle("bg-hijau", ok);
      titik.classList.toggle("bg-merah", !ok);
      titik.classList.remove("bg-garis-tua", "animate-pulse");
    }
    if (teks) teks.textContent = ok ? "Terhubung" : "Gagal memuat";

    // Jam pembaruan hanya berubah bila data berhasil dimuat
    const waktu = part("diperbarui");
    if (waktu && ok) waktu.textContent = `Diperbarui ${jamFmt.format(new Date()).replace(":", ".")} WIB`;
  }

  /* ---------- Muat data ---------- */
  function showError(message) {
    const box = part("error");
    if (box) {
      box.textContent = message;
      box.classList.toggle("hidden", !message);
    }
    if (message) renderFooter(false);
  }

  function readInline() {
    try {
      return JSON.parse(part("data")?.textContent ?? "");
    } catch {
      return null;
    }
  }

  async function load() {
    const url = root.dataset.url;
    if (!url) {
      const inline = readInline();
      if (inline) { 
        showError(""); 
        render(inline); 
      } else showError("Data dashboard tidak ditemukan.");
      return;
    }
    try {
      const res = await fetch(url, { headers: { Accept: "application/json" }, credentials: "same-origin" });
      if (!res.ok) throw new Error(`HTTP ${res.status}`);
      showError("");
      render(await res.json());
    } catch {
      showError("Data belum bisa dimuat. Coba muat ulang halaman.");
    }
  }

  root.setAttribute("aria-busy", "true");
  load();

  const detik = num(root.dataset.refresh);
  if (detik >= 10 && root.dataset.url) {
    setInterval(() => { if (!document.hidden) load(); }, detik * 1000);
    document.addEventListener("visibilitychange", () => { if (!document.hidden) load(); });
  }
}
/*end dashboard admin*/