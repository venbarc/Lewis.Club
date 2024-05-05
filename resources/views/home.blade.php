<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @php
     $title = "Home | Lewis Club"   
    @endphp    

    @include('includes.header')
    
    <body>
        @include('components.navbar')

        @include('components.products')
    </body>

    
    
</html>


<script>
    const navbarToggle = document.querySelector('[data-collapse-toggle="navbar-burger"]');
    const navbarBurger = document.getElementById('navbar-burger');
    const categoryIcon = document.getElementById('category-icon');
    const dropdownToggles = document.querySelectorAll('[data-dropdown-toggle]');
    
    navbarToggle.addEventListener('click', () => {
        navbarBurger.classList.toggle('hidden');
        navbarBurger.setAttribute('aria-expanded', navbarBurger.classList.contains('hidden') ? 'false' : 'true');
    });
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const targetId = toggle.getAttribute('data-dropdown-toggle');
            const dropdown = document.getElementById(targetId);
    
            dropdown.classList.toggle('hidden');
            dropdown.setAttribute('aria-expanded', dropdown.classList.contains('hidden') ? 'false' : 'true');
    
            // Toggle icon rotation
            categoryIcon.querySelector('svg').classList.toggle('rotate-180');
        });
    });
</script>