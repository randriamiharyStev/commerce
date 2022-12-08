
 <script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function(){
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }; 
</script>
<script src="<?php echo base_url('public/js/app.js') ?>"></script>
<script src="<?php echo base_url('public/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('public/FontAwesome/js/all.js') ?>"></script>
<script src="<?php echo base_url('public/bootstrap/js/bootsrap.js') ?>"></script>
<script src="<?php echo base_url('public/js/all.js') ?>"></script>
</body>
</html>
