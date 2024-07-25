<HTML>
    <HEAD>
        <LINK rel='stylesheet' href='styles.css' type='text/css' />
        <LINK rel='stylesheet' href='ResponsiveSlides.js-master/responsiveslides.css' type='text/css' />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

        <script src="ResponsiveSlides.js-master/responsiveslides.min.js"></script>
    
    </HEAD>
    
    <BODY>
        <header>
            <?php include 'menu.php'; ?>
        </header>  
        
         <ul class="rslides">
            <li><img src="1.jpg" alt="slider image"></li>
            <li><img src="2.png" alt="slider image"></li>
            <li><img src="3.jpg" alt="slider image"></li>
        </ul>
    
        <script>
        $(function() {
             $(".rslides").responsiveSlides({  auto: true,          
                    speed: 500,           
                    timeout: 4000,         
                    pager: false,           
                    nav: false,                
                })
            });
</script>
       

<HR/>
