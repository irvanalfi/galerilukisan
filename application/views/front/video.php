<section id="subintro">
  <div class="jumbotron subhead" id="overview">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="centered">
            <h3>Video</h3>
            <p>
              Terdapat berbagai edukasi yang berupa artikel dan juga video
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="breadcrumb">
  <div class="container">
    <div class="row">
      <div class="span12">
        <ul class="breadcrumb notop">
          <li><a href="#">Home</a><span class="divider">/</span></li>
          <li class="active">Video</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="maincontent">
  <div class="container">
    <div class="row">
      <div class="span4 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav affix-top">
          <li><a href="<?php echo site_url('artikel') ?>"><i class="icon-chevron-right"></i> Artikel</a></li>
          <li class="active"><a href="<?php echo site_url('video') ?>"><i class="icon-chevron-right"></i> Video</a></li>
        </ul>
      </div>
      <div class="span8">
        <?php foreach ($video as $value) { ?>
       
        <article class="blog-post">
          <div class="post-heading">
            <h3><a href="<?php echo site_url('artikel/detail/'.$value->link) ?>"><?php echo $value->nama; ?></a></h3>
          </div>
          <div class="row">
            <div class="span3">
              <div class="post-image">
                <a href="<?php echo site_url('artikel/detail/'.$value->link) ?>"><img src="upload/artikel/<?php echo $value->gambar ?>" alt="<?php echo $value->nama; ?>"></a>
              </div>
            </div>
            <div class="span5">
              <ul class="post-meta">
                <li class="first"><i class="icon-calendar"></i><span><?php echo $this->fungsi->tanggal_id($value->tanggal); ?></span></li>
                <!-- <li><i class="icon-list-alt"></i><span><a href="#">3 comments</a></span></li>
                <li class="last"><i class="icon-tags"></i><span><a href="#">Design</a>, <a href="#">Blog</a>, <a href="#">Tutorial</a></span></li> -->
              </ul>
              <div class="clearfix">
              </div>
              <p align="justify">
                <?php echo $this->fungsi->potong_kalimat($value->teks); ?> ...
              </p>
              <a class="btn btn-small btn-success" href="<?php echo site_url('video/detail/'.$value->link) ?>">Baca Lagi</a>
            </div>
          </div>
        </article>

        <?php } ?>
        
        <!-- end article 3 -->
        <div class="pagination">
          <ul>
            <li><a href="#">Prev</a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">Next</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>