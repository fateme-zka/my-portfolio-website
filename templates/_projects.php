<?php
// convert all projects from json file to associative array to use
$all_projects = json_decode(file_get_contents('projects.json'), true);
?>


<!--=============== PROJECTS ===============-->
<section class="work section" id="work">
    <span class="section__subtitle">My Portfolio</span>
    <h2 class="section__title">Recent Projects</h2>

    <div class="work__filters">
        <span class="work__item active-work" data-filter="all">All</span>
        <span class="work__item" data-filter=".backend">Backend</span>
        <span class="work__item" data-filter=".frontend">Frontend</span>
        <span class="work__item" data-filter=".fullstack">FullStack</span>
    </div>

    <div class="work__container container grid">

        <!-- foreach through all projects in projects.json file -->
        <?php foreach ($all_projects as $index => $project) { ?>
            <div class="work__card mix <?php echo $project['filter'];?>">
                <img src="<?php echo $project['image'];?>" alt="" class="work__img"/>

                <h3 class="work__title"><?php echo $project['title'];?></h3>

                <a href="<?php echo $project['url'];?>" target="_blank" class="work__button">
                    Demo <i class="bx bx-right-arrow-alt work__icon"></i>
                </a>
            </div>
        <?php } ?>



    </div>
</section>
<!--=============== END PROJECTS ===============-->
