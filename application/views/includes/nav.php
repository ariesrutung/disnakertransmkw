<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">


  <li class="nav-item">
    <a href="<?php echo url('dashboard') ?>" class="nav-link <?php echo ($page->menu == 'dashboard') ? 'active' : '' ?>">
      <i class="nav-icon fas fa-laptop"></i>
      <p>
        <?php echo lang('dashboard') ?>
      </p>
    </a>
  </li>

  <?php if (hasPermissions('pencari_kerja')) : ?>
    <li class="nav-item">
      <a href="<?php echo url('pencaker/pencari_kerja') ?>" class="nav-link <?php echo ($page->menu == 'pencari_kerja') ? 'active' : '' ?>">
        <i class="nav-icon fas fa-users"></i>
        <p>
          <?php echo lang('pencari_kerja')
          ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('profil_pencaker')) : ?>
    <li class="nav-item">
      <a href="<?php echo url('pencaker') ?>" class="nav-link <?php echo ($page->menu == 'profil_pencaker') ? 'active' : '' ?>">
        <i class="nav-icon fas fa-id-card"></i>
        <p>
          <?php echo lang('profil_pencaker')
          ?>
        </p>
      </a>
    </li>
  <?php endif ?>
  <!--end menu profil pencaker -->

  <?php if (hasPermissions('doc_pencaker')) : ?>

    <!-- dokumen -->
    <li class="nav-item">
      <a href="<?php echo url('pencaker/dok_pencaker') ?>" class="nav-link <?php echo ($page->menu == 'doc_pencaker') ? 'active' : '' ?>">
        <i class="nav-icon fas fa-file"></i>
        <p>
          <?php echo lang('doc_pencaker') ?>
        </p>
      </a>
    </li>
  <?php endif ?>
  <!--end menu doc pencaker -->

  <!-- menu informasi -->
  <?php if (hasPermissions('informasi')) : ?>
    <li class="nav-item has-treeview <?php echo ($page->menu == 'informasi') ? 'menu-open' : '' ?>">
      <a href="#" class="nav-link  <?php echo ($page->menu == 'informasi') ? 'active' : '' ?>">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>
          <?php echo lang('informasi') ?>
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?php echo url('informasi/berita') ?>" class="nav-link <?php echo ($page->submenu == 'berita') ? 'active' : '' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p> <?php echo lang('berita') ?> </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo url('informasi/pengumuman') ?>" class="nav-link <?php echo ($page->submenu == 'pengumuman') ? 'active' : '' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p> <?php echo lang('pengumuman') ?> </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo url('informasi/pelatihan') ?>" class="nav-link <?php echo ($page->submenu == 'pelatihan') ? 'active' : '' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p> <?php echo lang('pelatihan') ?></p>
          </a>
        </li>
      </ul>
    </li>
  <?php endif ?>
  <!--end menu informasi -->

  <?php if (hasPermissions('users_list')) : ?>
    <li class="nav-item">
      <a href="<?php echo url('users') ?>" class="nav-link <?php echo ($page->menu == 'users') ? 'active' : '' ?>">
        <i class="nav-icon fas fa-user"></i>
        <p>
          <?php echo lang('users') ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('activity_log_list')) : ?>
    <li class="nav-item">
      <a href="<?php echo url('activity_logs') ?>" class="nav-link <?php echo ($page->menu == 'activity_logs') ? 'active' : '' ?>">
        <i class="nav-icon fas fa-history"></i>
        <p>
          <?php echo lang('activity_logs') ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('roles_list')) : ?>
    <li class="nav-item">
      <a href="<?php echo url('roles') ?>" class="nav-link <?php echo ($page->menu == 'roles') ? 'active' : '' ?>">
        <i class="nav-icon fas fa-lock"></i>
        <p>
          <?php echo lang('manage_roles') ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('permissions_list')) : ?>
    <li class="nav-item">
      <a href="<?php echo url('permissions') ?>" class="nav-link <?php echo ($page->menu == 'permissions') ? 'active' : '' ?>">
        <i class="nav-icon fas fa-user-lock"></i>
        <p>
          <?php echo lang('manage_permissions') ?>
        </p>
      </a>
    </li>
  <?php endif ?>


  <?php if (hasPermissions('backup_db')) : ?>
    <li class="nav-item">
      <a href="<?php echo url('backup') ?>" class="nav-link <?php echo ($page->menu == 'backup') ? 'active' : '' ?>">
        <i class="nav-icon fas fa-database"></i>
        <p>
          <?php echo lang('backup') ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('company_settings')) : ?>
    <li class="nav-item has-treeview <?php echo ($page->menu == 'settings') ? 'menu-open' : '' ?>">
      <a href="#" class="nav-link  <?php echo ($page->menu == 'settings') ? 'active' : '' ?>">
        <i class="nav-icon fas fa-cog"></i>
        <p>
          <?php echo lang('settings') ?>
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?php echo url('settings/general') ?>" class="nav-link <?php echo ($page->submenu == 'general') ? 'active' : '' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p> <?php echo lang('general_setings') ?> </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo url('settings/company') ?>" class="nav-link <?php echo ($page->submenu == 'company') ? 'active' : '' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p> <?php echo lang('company_setings') ?> </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo url('settings/email_templates') ?>" class="nav-link <?php echo ($page->submenu == 'email_templates') ? 'active' : '' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p> <?php echo lang('manage_email_template') ?></p>
          </a>
        </li>
      </ul>
    </li>
  <?php endif ?>


  <?php if (hasPermissions('manual_book')) : ?>
    <li class="nav-item">
      <a href="<?php echo url('manual_book') ?>" class="nav-link <?php echo ($page->menu == 'manual_book') ? 'active' : '' ?>">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Buku Panduan
        </p>
      </a>
    </li>
  <?php endif ?>


</ul>