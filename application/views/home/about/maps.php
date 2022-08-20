<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1929.613525647001!2d121.0819903111145!3d14.699748133009575!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba7528549fb1%3A0x62d21f0cc60f364d!2sPolytechnic%20University%20of%20the%20Philippines%20Quezon%20City!5e0!3m2!1sen!2sph!4v1660912940997!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
         <figure class="facilities">
             <figcaption>Academic Building</figcaption>
            <img src="<?= base_url() ?>public/images/about/acad.jpg" height="300" width="450">
            <figcaption>Covered Court (Winnie Castelo Complex)</figcaption>
            <img src="<?= base_url() ?>public/images/about/gym.jpg" height="300" width="450">
            <figcaption>Audio-Visual Room(AVR)/Computer Laboratory</figcaption>
            <img src="<?= base_url() ?>public/images/about/lab.jpg" height="300" width="450">
            <figcaption>Miserior Building</figcaption>
            <img src="<?= base_url() ?>public/images/about/mise.jpg" height="300" width="450">
            <figcaption>Learning Resource Center</figcaption>
            <img src="<?= base_url() ?>public/images/about/library.jpg" height="300" width="450">
            <figcaption>Rothlener Building</figcaption>
            <img src="<?= base_url() ?>public/images/about/rothlener.jpg" height="300" width="450">
            <figcaption>Student Lounge</figcaption>
            <img src="img/lounge.jpg" height="300" width="450">
        </figure>

        <style>
            .facilities{
                padding: 0px ;
                border:5px black;
                display:block;
                margin: 5px;
                
            }
            .maps{
                margin:auto;
            }
        </style>

    </div>
    
</body>
</html>
