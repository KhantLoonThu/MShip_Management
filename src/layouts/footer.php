<footer></footer>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        // Toggle the 'hidden' class to show/hide the mobile menu
        mobileMenu.classList.toggle('hidden');
    });
});
</script>
</body>

</html>