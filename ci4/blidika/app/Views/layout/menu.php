<style>
    .overlay-menu>.container>.row>.main-menu>ul>li.mine {
        cursor: pointer;
    }

    #dp-menu1 {
        display: none;
        visibility: hidden;
    }
</style>

<section class="overlay-menu">
    <div class="container">
        <div class="row">
            <div class="main-menu">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="mine">
                        <a class="dp">
                            <div type="button" id="dp-toggle1">
                                Kategori
                            </div>
                            <ul class="mine-dp-menu" id="dp-menu1">
                                <li><a href="#">Comercial Building</a></li>
                                <li><a href="#">Hunian</a></li>
                                <li><a href="#">Interior Design</a></li>
                                <br><br>
                            </ul>
                        </a>
                    </li>

                    <li>
                        <a href="/admin">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>