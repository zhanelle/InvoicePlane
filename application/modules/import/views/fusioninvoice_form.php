<div id="headerbar">
    <h1 class="headerbar-title"><?php _trans('import_from_fusioninvoice'); ?></h1>
</div>

<div id="content">

    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5><?php _trans('import_from_fusioninvoice'); ?></h5>
                </div>

                <div class="panel-body">

                    <p><?php _trans('import_from_fusioninvoice_help'); ?></p>

                    <br>

                    <form method="post" action="<?php echo site_url('import/fusioninvoice/form'); ?>">

                        <input type="hidden" name="<?php echo $this->config->item('csrf_token_name'); ?>"
                               value="<?php echo $this->security->get_csrf_hash() ?>">

                        <div class="form-group">
                            <label for="db_hostname">
                                <?php _trans('hostname'); ?>
                            </label>
                            <input type="text" name="db_hostname" id="db_hostname" class="form-control" required
                                   value="<?php echo($this->input->post('db_hostname') ? $this->input->post('db_hostname') : 'localhost'); ?>">
                            <span class="help-block"><?php _trans('setup_db_hostname_info'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="db_port">
                                <?php _trans('port'); ?>
                            </label>
                            <input type="text" name="db_port" id="db_port" class="form-control" required
                                   value="<?php echo($this->input->post('db_port') ? $this->input->post('db_port') : 3306); ?>">
                            <span class="help-block"><?php _trans('setup_db_port_info'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="db_username">
                                <?php _trans('username'); ?>
                            </label>
                            <input type="text" name="db_username" id="db_username" class="form-control"
                                   value="<?php echo $this->input->post('db_username'); ?>" required>
                            <span class="help-block"><?php _trans('setup_db_username_info'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="db_password">
                                <?php _trans('password'); ?>
                            </label>
                            <input type="password" name="db_password" id="db_password" class="form-control"
                                   value="<?php echo $this->input->post('db_password'); ?>" required>
                            <span class="help-block"><?php _trans('setup_db_password_info'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="db_database">
                                <?php _trans('database'); ?>
                            </label>
                            <input type="text" name="db_database" id="db_database" class="form-control"
                                   value="<?php echo $this->input->post('db_database'); ?>" required>
                            <span class="help-block"><?php _trans('setup_db_database_info'); ?></span>
                        </div>

                        <br>

                        <input type="submit" class="btn btn-default" name="btn_import_fi"
                               value="<?php _trans('import'); ?>">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
