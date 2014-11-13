<?php $this->load->view('components/page_head'); ?>


<body>

    <div class="container">
        <section>
            <h1><?php echo config_item('site_name'); ?></h1>
        </section>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Homepage<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Resume/CV</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="span9">
                <h2>CV</h2>

                <?php
                foreach ($articles as $art) {
                    echo $art->pubdate;
                    echo "<h2>$art->title</h2>";
                    echo $art->body;
                }
                ?>
            </div>

            <!-- Sidebar -->
            <div class="span3">
                <h2>Picture</h2>
                <img id="slika" src="<?php echo base_url('public_html/img/zika.jpg'); ?>" alt="Smiley face" width="92" height="136">
            </div>
        </div>
    </div>
    <?php $this->load->view('components/page_tail'); ?>

