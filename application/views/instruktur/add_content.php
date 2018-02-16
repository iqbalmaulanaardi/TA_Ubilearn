<main class="mdl-layout__content">
    <div class="mdl-grid cover-main"></div>
    <div class="mdl-grid">
    
    <?php if ($this->session->flashdata('insert_content') == TRUE): ?>
    <div role="alert"  class="alert alert-success alert-dismissible fade in mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--2-offset-tablet mdl-cell--12-col-phone"> 
        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span>
        </button>
        <p><?php echo $this->session->flashdata('insert_content')?></p>
    </div>
    <?php endif; ?>
    
        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--2-offset-tablet mdl-cell--12-col-phone">
            <div class="mdl-card mdl-shadow--2dp pie-chart">
                <div class="mdl-card__title" style="display:block;">
                    <h2 class="mdl-card__title-text">Content</h2>
                    <div class="mdl-card__subtitle-text">Masukan Detail Content</div>
                </div>
                <div class="mdl-card__supporting-text">
                    <form action="<?php echo site_url('instruktur/insert_content'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="inputtext3" class="col-sm-2 control-label">Nama Kontent</label>
                            <div class="col-sm-10">
                            <input name="cnt_name" type="text" class="form-control" id="inputtext3" placeholder="Nama Content">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputtext3" class="col-sm-2 control-label">Deskripsi Content</label>
                            <div class="col-sm-10">
                            <textarea name="cnt_desc" class="form-control" id="inputtext3" placeholder="Deskripsi Content"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputtext3" class="col-sm-2 control-label">Content Comment</label>
                            <div class="col-sm-10">
                            <textarea name="cnt_comment" class="form-control" id="inputtext3" placeholder="Content Comment"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputtext3" class="col-sm-2 control-label">Tipe Content</label>
                            <div class="col-sm-10">
                            <input name="cnt_type" type="text" class="form-control" id="inputtext3" placeholder="Tipe Content">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputtext3" class="col-sm-2 control-label">Sumber Content</label>
                            <div class="col-sm-10">
                            <textarea name="cnt_source" class="form-control" id="inputtext3" placeholder="Sumber Content"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Learning Outcome</label>
                            <div class="col-sm-10">
                            <select name="loc_id" class="form-control">
                                <option disabled selected>Pilihan Learning Outcome</option>
                                    <?php foreach($dataLO as $LO): ?>
                                <option value="<?php echo $LO->loc_id ?> "><?php echo $LO->loc_desc ?></option>
                                    <?php endforeach ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                            <input name="lsn_id" class="form-control" id="inputtext3" value="<?php echo $lsn_id?>" style="display:none"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-blue">Selesai</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>