
      <!-- <footer class="text-center border-t py-2">
        <p class="text-gray-700 text-xs">© 2019-2022 Flowbite.com. All rights reserved.</p>
      </footer> -->

      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
  <script src="<?= base_url()?>assets/js/select2.min.js"></script>

  <script src="<?= base_url()?>assets/js/sweetalert2.min.js"></script>
  <script src="<?= base_url()?>assets/js/all.min.js"></script>
  <script src="<?= base_url()?>assets/js/script.js"></script>
  <script>

const productSelect = () => {
        $('.product').select2();
        $('.each').select2();
    }
    productSelect();
  </script>
</body>

</html>