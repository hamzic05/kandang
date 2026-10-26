<div {{ $attributes }}>
    <x-ui.navigation.navlink href="/" :active="request()->is('/')"><x-slot:menu>Home</x-slot:menu></x-ui.navigation.navlink>
    <x-ui.navigation.navlink href="/blog" :active="request()->is('blog')"><x-slot:menu>Blog</x-slot:menu></x-ui.navigation.navlink>
    <x-ui.navigation.navlink href="/about" :active="request()->is('about')"><x-slot:menu>About</x-slot:menu></x-ui.navigation.navlink>
    <x-ui.navigation.navlink href="/contact" :active="request()->is('contact')"><x-slot:menu>Contact</x-slot:menu></x-ui.navigation.navlink>
</div>