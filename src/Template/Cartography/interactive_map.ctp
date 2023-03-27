<?= $this->element('header')?>


<div class="container-xxl">
    <div style='width: 100%; max-width: 100%; margin: auto; /*height: 100vh*/;'>
        <!-- par el hosting sin impenetrbale src="/Mapas/area_estudio" -->
        <!-- <iframe width="100%"
                src="/impenetrable/Mapas/area_estudio"
                style="border: 1px solid black; height: 550px";>

        </iframe>-->

        <?= $this->element('mapas/mapa_interactive')?>


    </div>



</div>
