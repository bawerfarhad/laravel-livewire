this project is for laravel livewire, livewire used for making single page applications (SPA)

1- to install livewire in laravel we need to install using composer, 
    => composer require livewire/livewire
    after install we need some configs in the config\livewire.php, look at the file for understanding
    after the configs we need to clear cache, the command is: php artisan config:cache
2- to make a component, command is: php artisan make:livewire <name of the component>, php artisan make:livewire index

3- after creating the component you need to import the styles and scripts that livewire needs to work in the base blade that the component called
    importing the style and scripts like this
            @livewireStyles() {{-- its needed to import livewire styles --}}
            @livewireScripts() {{-- its needed to import livewire scripts --}}
