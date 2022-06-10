
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone 2</title>
    <!-- css custom -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- vuejs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>
 <div id="root">

<header>
    <section class="ms_header">
        <img src="../img/logo.png" alt="">
    </section>
</header>

<ul>
    <div class="card" v-for="item in albums">
        <li><img :src="item.poster"></li>
        <li><h2>{{ item.title }}</h2></li>
        <li>{{ item.author }}</li>
        <li>{{ item.year }}</li>
    </div>
</ul> 


 </div>   
<!-- script -->
<script src="js/script.js"></script>
</body>
</html>