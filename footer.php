<!-- END GAllery -->
<?php wp_footer(); ?>
<script>
    const menuButton = document.getElementById('main-menu');
    const menuCloseButton = document.getElementById('menuCloseButton');
    const dropDownMenu = document.getElementById('dropDownMenu');
    menuButton.addEventListener('click', function() {
        dropDownMenu.classList.toggle('showDropDownMenu');
    })
    menuCloseButton.addEventListener('click', function() {
        dropDownMenu.classList.toggle('showDropDownMenu');
    })

    const openSubPhone = document.querySelectorAll('.openSubPhone');
    console.log(openSubPhone);
    for (let i = 0; i < openSubPhone.length; i++) {
        console.log(i);
        openSubPhone[i].addEventListener('click', function(e) {

            let parent = this.parentElement.parentElement.nextElementSibling;
            openSubPhone[i].classList.toggle('rotate-90')

            console.log(parent.nextElementSibling);
            parent.classList.toggle('open')
            console.log(parent);

        })
    }
</script>
</body>

</html>