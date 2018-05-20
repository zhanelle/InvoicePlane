<div id="headerbar">
    <h1 class="headerbar-title"><?php _trans('import_from_fusioninvoice'); ?></h1>

    <div class="headerbar-item pull-right">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('import/form'); ?>">
            <i class="fa fa-cogs"></i> <?php _trans('setup_database_details'); ?>
        </a>
    </div>

</div>

<div id="content">

    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">

            <?php echo $this->layout->load_view('layout/alerts'); ?>

            <form action="<?php echo site_url('import/fusioninvoice/import'); ?>">

                <ul class="list-group">
                    <li class="list-group-item">
                        <span>
                            <i class="fa fa-times text-danger"></i>
                        </span>
                        <span>
                            <?php echo trans('clients') . ' & ' . trans('users') ?>
                        </span>
                        <button type="submit" name="import_clients_users" value="1"
                                class="btn btn-xs btn-default pull-right">
                            <?php _trans('import') ?>
                        </button>
                    </li>
                    <li class="list-group-item">
                        <span>
                            <i class="fa fa-times text-danger"></i>
                        </span>
                        <span class="text-muted">
                            <?php echo trans('payment_methods') . ' & ' . trans('tax_rates') ?>
                        </span>
                        <button type="submit" name="import_paymentmethods_taxrates" value="1"
                                class="btn btn-xs btn-default pull-right" disabled>
                            <?php _trans('import') ?>
                        </button>
                    </li>
                    <li class="list-group-item">
                        <span>
                            <i class="fa fa-times text-danger"></i>
                        </span>
                        <span class="text-muted"><?php _trans('products') ?></span>
                        <button type="submit" name="import_products" value="1"
                                class="btn btn-xs btn-default pull-right" disabled>
                            <?php _trans('import') ?>
                        </button>
                    </li>
                    <li class="list-group-item">
                        <span>
                            <i class="fa fa-times text-danger"></i>
                        </span>
                        <span class="text-muted">
                            <?php echo trans('quotes') . ' & ' . trans('invoices') ?>
                        </span>
                        <button type="submit" name="import_quotes_invoices" value="1"
                                class="btn btn-xs btn-default pull-right" disabled>
                            <?php _trans('import') ?>
                        </button>
                    </li>
                    <li class="list-group-item">
                        <span>
                            <i class="fa fa-times text-danger"></i>
                        </span>
                        <span class="text-muted"><?php _trans('payments') ?></span>
                        <button type="submit" name="import_payments" value="1"
                                class="btn btn-xs btn-default pull-right" disabled>
                            <?php _trans('import') ?>
                        </button>
                    </li>
                </ul>

            </form>

        </div>
    </div>

</div>
