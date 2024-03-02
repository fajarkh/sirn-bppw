  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
  
  <!-- Datatable Client Sice -->
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script>    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.fn.dataTable.ext.errMode = 'none';
        
        $(document).ready( function () {
            $('#myTable').DataTable({
                "language": {
                    "emptyTable": "Data Tidak Ditemukan",
                    "zeroRecords": "Data Tidak Ditemukan"
                }
            });
        } );
  </script>
    <!-- Akhir Datatable Client Sice -->
    <!-- Previe Image -->
    <script>
        $(function() {
            $('.pop').on('click', function() {
                $('.imagepreview').attr('src',$(this).find('img').attr('src'));
                $('#imagemodal').modal('show');   
            });		
        });
    </script>
    <!--Akhir Previe Image -->
    <script>
        $(document).ready(function() {
            $('.select-text').select2();
        });
    </script>
  @stack('scripts')