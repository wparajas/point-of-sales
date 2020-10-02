<?php
  $userdata = $this->session->userdata('userdata');
  $user_roleID = $userdata['roleID'];
  $this->db->select('*');
  $this->db->from('pos_rolemodule');
  $this->db->where("roleID",  $user_roleID);  
  echo $this->session->userdata('roleID');
  $result = $this->db->get()->result();
 

  $permission=array();
  $index = 1;

  foreach($result as $single)
  {
     $permission[$index] = $single->modulestatus;
     $index++;
  }
?>

<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
  <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index.html">
        <img src="<?php echo base_url();?>pages\assets\img\costic\costic-logo-216x62.png" alt="logo">
      </a>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">

      <?php if ($permission[1]) { ?>
        <li class="menu-item">
          <a href="<?php echo base_url(); ?>Dashboard"> <span><i class="material-icons fs-16">dashboard</i>Dashboard</span>
          </a>
        </li>
      <?php } ?>

      <?php if ($permission[2]) { ?>
        <li class="menu-item">
          <a href="<?php echo base_url(); ?>Company"> <span><i class="fa fa-building"></i>Company Setup</span>
          </a>
        </li>
      <?php } ?>

      <?php if ($permission[3]) { ?>
        <li class="menu-item">
          <a href="<?php echo base_url(); ?>Permission"> <span><i class="fas fa-user-lock"></i>Roles and Permission</span>
          </a>
        </li>
      <?php } ?>

      <?php if ($permission[4] || $permission[5] || $permission[6]) { ?>
        <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Users" aria-expanded="false" aria-controls="Users"> <span><i class="fas fa-users"></i>Users </span>
          </a>
          <ul id="Users" class="collapse" aria-labelledby="Users" data-parent="#side-nav-accordion">

            <?php if ($permission[4]) { ?>
              <li class="menu-item">
                <a href="<?= base_url().'UserDepartment' ?>"> <span>User Department</span></a>
              </li>
            <?php } ?>

            <?php if ($permission[5]) { ?>
              <li class="menu-item">
                <a href="<?= base_url().'UserDesignation' ?>"> <span>User Designation</span></a>
              </li>
            <?php } ?>

            <?php if ($permission[6]) { ?>
              <li class="menu-item">
                <a href="<?= base_url().'UserAccount' ?>"> <span>User Account</span></a>
              </li>
            <?php } ?>

          </ul>
        </li>
      <?php } ?>

      <?php if ($permission[7]) { ?>
        <li class="menu-item">
          <a href="<?php echo base_url(); ?>Approval"> <span><i class="fas fa-sliders-h"></i>Approval Setup</span>
          </a>
        </li>
      <?php } ?>

      <?php if ($permission[8] || $permission[9]) { ?>
        <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Warehouse" aria-expanded="false" aria-controls="Warehouse"> <span><i class="fas fa-warehouse"></i>Warehouse and Storage</span>
          </a>
          <ul id="Warehouse" class="collapse" aria-labelledby="Warehouse" data-parent="#side-nav-accordion">

            <?php if ($permission[8]) { ?>
              <li><a href="<?php echo base_url(); ?>InventoryStorage">Inventory Storage</a></li>
            <?php } ?>

            <?php if ($permission[9]) { ?>
              <li><a href="#">Reports</a></li>
            <?php } ?>

          </ul>
        </li>
      <?php } ?>

      <?php if ($permission[10] || $permission[11]) { ?>
        <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Supplier" aria-expanded="false" aria-controls="Supplier"> <span><i class="fas fa-cart-plus"></i>Supplier </span>
          </a>
          <ul id="Supplier" class="collapse" aria-labelledby="Supplier" data-parent="#side-nav-accordion">

            <?php if ($permission[10]) { ?>
              <li><a href="<?= base_url().'InventoryVendor' ?>">Inventory Vendor</a></li>
            <?php } ?>

            <?php if ($permission[11]) { ?>
              <li><a href="#">Reports</a></li>
            <?php } ?>

          </ul>
        </li>
      <?php } ?>

      <?php if ($permission[12] || $permission[13]) { ?>
        <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Logistic" aria-expanded="false" aria-controls="Logistic"> <span><i class="fas fa-truck"></i>Logistic </span>
          </a>
          <ul id="Logistic" class="collapse" aria-labelledby="Logistic" data-parent="#side-nav-accordion">

            <?php if ($permission[12]) { ?>
              <li><a href="<?= base_url().'Courier' ?>">Courier Setup</a></li>
            <?php } ?>

            <?php if ($permission[13]) { ?>
              <li><a href="#">Reports</a></li>
            <?php } ?>

          </ul>
        </li>
      <?php } ?>

      <?php if ($permission[14] || $permission[15] || $permission[16] || $permission[17] || $permission[18] || $permission[19] || $permission[20] || $permission[21] || $permission[22] || $permission[23] || $permission[24] || $permission[25] || $permission[26]) { ?>
        <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#inventory_module" aria-expanded="false" aria-controls="inventory_module"> <span><i class="fas fa-boxes"></i>Inventory </span>
          </a>
          <ul id="inventory_module" class="collapse" aria-labelledby="inventory_module" data-parent="#side-nav-accordion">

            <?php if ($permission[14] || $permission[15]) { ?>
              <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#inventory_setup" aria-expanded="false" aria-controls="inventory_setup"> <span>Inventory Setup </span>
                </a>
                <ul id="inventory_setup" class="collapse pl-0" aria-labelledby="inventory_setup">

                  <?php if ($permission[14]) { ?>
                    <li><a href="<?= base_url().'InventoryGroup' ?>">Inventory Group</a></li>
                  <?php } ?>

                  <?php if ($permission[15]) { ?>
                    <li><a href="<?= base_url().'InventoryItem'?>">Inventory Item</a></li>
                  <?php } ?>

                </ul>
              </li>
            <?php } ?>

            <?php if ($permission[16] || $permission[17]) { ?>
              <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#purchase" aria-expanded="false" aria-controls="purchase"> <span>Purchase </span>
                </a>
                <ul id="purchase" class="collapse pl-0" aria-labelledby="purchase">

                  <?php if ($permission[16]) { ?>
                    <li><a href="<?= base_url().'PurchaseRequest' ?>">Purchase Request</a></li>
                  <?php } ?>

                  <?php if ($permission[17]) { ?>
                    <li><a href="<?= base_url(). 'PurchaseOrder' ?>">Purchase Order</a></li>
                  <?php } ?>

                </ul>
              </li>
            <?php } ?>

            <?php if ($permission[18] || $permission[19] || $permission[20] || $permission[21] || $permission[22] || $permission[23]) { ?>
              <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#inventory_movement" aria-expanded="false" aria-controls="inventory_movement"> <span>Inventory Movement </span>
                </a>
                <ul id="inventory_movement" class="collapse pl-0" aria-labelledby="inventory_movement">

                  <?php if ($permission[18]) { ?>
                    <li><a href="<?= base_url().'ListStocks'?>">List of Stocks</a></li>
                  <?php } ?>

                  <?php if ($permission[19]) { ?>
                    <li><a href="<?= base_url().'StockInWarehouse'?>">Stock in Warehouse</a></li>
                  <?php } ?>

                  <?php if ($permission[20]) { ?>
                    <li><a href="<?= base_url().'StockOutWarehouse'?>">Stock out Warehouse</a></li>
                  <?php } ?>

                  <?php if ($permission[21]) { ?>
                    <li><a href="<?= base_url().'StockInDepartment' ?>">Stock in Department</a></li>
                  <?php } ?>

                  <?php if ($permission[22]) { ?>
                    <li><a href="<?= base_url().'TransferRequest' ?>">Transfer Request Form</a></li>
                  <?php } ?>

                  <?php if ($permission[23]) { ?>
                    <li><a href="#">Inventory Movement</a></li>
                  <?php } ?>

                </ul>
              </li>
            <?php } ?>

            <?php if ($permission[24] || $permission[25] || $permission[26]) { ?>
              <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#reports" aria-expanded="false" aria-controls="reports"> <span>Reports </span>
                </a>
                <ul id="reports" class="collapse pl-0" aria-labelledby="reports">

                  <?php if ($permission[24]) { ?>
                    <li><a href="#">Inventory Report</a></li>
                  <?php } ?>

                  <?php if ($permission[25]) { ?>
                    <li><a href="#">Purchase Report</a></li>
                  <?php } ?>

                  <?php if ($permission[26]) { ?>
                    <li><a href="#">Inventory Incident Report</a></li>
                  <?php } ?>

                </ul>
              </li>
            <?php } ?>

          </ul>
        </li>
      <?php } ?>

      <?php if ($permission[27] || $permission[28] || $permission[29] || $permission[30] || $permission[31] || $permission[32] || $permission[33] || $permission[34] || $permission[35] || $permission[36] || $permission[37] || $permission[38]) { ?>
        <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#pointofsale" aria-expanded="false" aria-controls="pointofsale"> <span><i class="fas fa-utensils"></i>Point of Sale </span>
          </a>
          <ul id="pointofsale" class="collapse" aria-labelledby="pointofsale" data-parent="#side-nav-accordion">

            <?php if ($permission[27] || $permission[28] || $permission[29] || $permission[30] || $permission[31]) { ?>
              <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#pos_masterfile" aria-expanded="false" aria-controls="pos_masterfile"> <span>Masterfile </span>
                </a>
                <ul id="pos_masterfile" class="collapse pl-0" aria-labelledby="pos_masterfile">

                  <?php if ($permission[27]) { ?>
                    <li><a href="<?= base_url().'MenuGroup' ?>">Menu Group</a></li>
                  <?php } ?>

                  <?php if ($permission[28]) { ?>
                    <li><a href="<?= base_url().'MenuCategory' ?>">Menu Category</a></li>
                  <?php } ?>

                  <?php if ($permission[29]) { ?>
                    <li><a href="<?= base_url().'MenuItem'?>">Menu Item</a></li>
                  <?php } ?>

                  <?php if ($permission[30]) { ?>
                    <li><a href="<?= base_url().'DiscountSetup'?>">Discount Setup</a></li>
                  <?php } ?>

                  <?php if ($permission[31]) { ?>
                    <li><a href="<?= base_url().'Payment' ?>">Payment Setup</a></li>
                  <?php } ?>

                </ul>
              </li>
            <?php } ?>

            <?php if ($permission[32]) { ?>
                <li><a href="<?= base_url().'PostSchedule'?>">Post Scheduling</a></li>
            <?php } ?>

            <?php if ($permission[33] || $permission[34] || $permission[35] || $permission[36]) { ?>
              <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#pos" aria-expanded="false" aria-controls="pos"> <span>POS </span>
                </a>
                <ul id="pos" class="collapse pl-0" aria-labelledby="pos">

                  <?php if ($permission[33]) { ?>
                    <li><a href="<?= base_url().'CashTray' ?>">Cash Tray In</a></li>
                  <?php } ?>

                  <?php if ($permission[34]) { ?>
                    <li><a href="<?= base_url().'OrderTaking' ?>">Dine In/Take Out</a></li>
                  <?php } ?>

                  <?php if ($permission[35]) { ?>
                    <li><a href="<?= base_url().'Recall' ?>">Recall</a></li>
                  <?php } ?>

                  <?php if ($permission[36]) { ?>
                    <li><a href="<?= base_url().'DiscountSetup' ?>">Discount</a></li>
                  <?php } ?>

                </ul>
              </li>
            <?php } ?>

            <?php if ($permission[37] || $permission[38]) { ?>
              <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#pos_reports" aria-expanded="false" aria-controls="pos_reports"> <span>Reports </span>
                </a>
                <ul id="pos_reports" class="collapse pl-0" aria-labelledby="pos_reports">

                  <?php if ($permission[37]) { ?>
                    <li><a href="#">Cashier Report</a></li>
                  <?php } ?>

                  <?php if ($permission[38]) { ?>
                    <li><a href="#">Sales Report</a></li>
                  <?php } ?>

                </ul>
              </li>
            <?php } ?>

          </ul>
        </li>
      <?php } ?>

    </ul>
</aside> 