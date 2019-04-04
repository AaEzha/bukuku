<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('dashboard');?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Bukuku</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('dashboard');?>">
          <i class="fas fa-fw fa-list-alt"></i>
          <span>Seluruh Buku</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Filter
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('filter/topik');?>">
          <i class="fas fa-fw fa-globe"></i>
          <span>Topik Buku</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('filter/penerbit');?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Penerbit</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('filter/penulis');?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Penulis</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('filter/tahun');?>">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Tahun Terbit</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administration
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('buku');?>">
          <i class="fas fa-fw fa-plus"></i>
          <span>Tambah Buku</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('buku/data');?>">
          <i class="fas fa-fw fa-edit"></i>
          <span>Manajemen Buku</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->