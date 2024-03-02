<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Foto Rumah </label> <br><br>
            <a href="#" class="pops">
                <img src="{{ (!empty($wasdal->foto_rumah1))? url('image/wasdal/foto_rumah1/'.$wasdal->foto_rumah1):url('img/no-image.jpg') }}" alt="gambar" width="120" height="90">
            </a>
            <div class="modal fade" id="imagereview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">							   
                    <div class="modal-content">         						      
                        <div class="modal-body">                                                  
                            <img src="{{ (!empty($wasdal->foto_rumah1))? url('image/wasdal/foto_rumah1/'.$wasdal->foto_rumah1):url('img/no-image.jpg') }}" class="fotoview" id="img-show" style="width: 100%;">                      
                        </div>							    
                    </div>								   
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <br><br>
            <a href="#" class="pops">
                <img src="{{ (!empty($wasdal->foto_rumah2))? url('image/wasdal/foto_rumah2/'.$wasdal->foto_rumah2):url('img/no-image.jpg') }}" alt="gambar" width="120" height="90">
            </a>
            <div class="modal fade" id="imagereview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">							   
                    <div class="modal-content">         						      
                        <div class="modal-body">                                                  
                            <img src="{{ (!empty($wasdal->foto_rumah2))? url('image/wasdal/foto_rumah2/'.$wasdal->foto_rumah2):url('img/no-image.jpg') }}" class="fotoview" id="img-show" style="width: 100%;">                      
                        </div>							    
                    </div>								   
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <a href="#" class="pops">
                <img src="{{ (!empty($wasdal->foto_rumah3))? url('image/wasdal/foto_rumah3/'.$wasdal->foto_rumah3):url('img/no-image.jpg') }}" alt="gambar" width="120" height="90">
            </a>
            <div class="modal fade" id="imagereview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">							   
                    <div class="modal-content">         						      
                        <div class="modal-body">                                                  
                            <img src="{{ (!empty($wasdal->foto_rumah3))? url('image/wasdal/foto_rumah3/'.$wasdal->foto_rumah3):url('img/no-image.jpg') }}" class="fotoview" id="img-show" style="width: 100%;">                      
                        </div>							    
                    </div>								   
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <a href="#" class="pops">
                <img src="{{ (!empty($wasdal->foto_rumah4))? url('image/wasdal/foto_rumah4/'.$wasdal->foto_rumah4):url('img/no-image.jpg') }}" alt="gambar" width="120" height="90">
            </a>
            <div class="modal fade" id="imagereview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">							   
                    <div class="modal-content">         						      
                        <div class="modal-body">                                                  
                            <img src="{{ (!empty($wasdal->foto_rumah4))? url('image/wasdal/foto_rumah4/'.$wasdal->foto_rumah4):url('img/no-image.jpg') }}" class="fotoview" id="img-show" style="width: 100%;">                      
                        </div>							    
                    </div>								   
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Pembayaran 5% </label> <br><br>
            <a href="#" class="pops">
                <img src="{{ (!empty($wasdal->foto_5))? url('image/wasdal/foto_5/'.$wasdal->foto_5):url('img/no-image.jpg') }}" alt="gambar" width="120" height="90">
            </a>
            <div class="modal fade" id="imagereview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">							   
                    <div class="modal-content">         						      
                        <div class="modal-body">                                                  
                            <img src="{{ (!empty($wasdal->foto_5))? url('image/wasdal/foto_5/'.$wasdal->foto_5):url('img/no-image.jpg') }}" class="fotoview" id="img-show" style="width: 100%;">                      
                        </div>							    
                    </div>								   
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <label for="" class="label">Pembayaran Terakhir </label> <br><br>
            <a href="#" class="pops">
                <img src="{{ (!empty($wasdal->foto_pembayaran_akhir))? url('image/wasdal/foto_pembayaran_akhir/'.$wasdal->foto_pembayaran_akhir):url('img/no-image.jpg') }}" alt="gambar" width="120" height="90">
            </a>
            <div class="modal fade" id="imagereview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">							   
                    <div class="modal-content">         						      
                        <div class="modal-body">                                                  
                            <img src="{{ (!empty($wasdal->foto_pembayaran_akhir))? url('image/wasdal/foto_pembayaran_akhir/'.$wasdal->foto_pembayaran_akhir):url('img/no-image.jpg') }}" class="fotoview" id="img-show" style="width: 100%;">                      
                        </div>							    
                    </div>								   
                </div>
            </div>
        </div>
    </div>
</div>

@if (Auth::check() && Auth::user()->role  == "superadmin")
<div class="text-center">
    <a href="{{ route('wasdal.foto', ['wasdal_id'=>$wasdal->id]) }}" class="btn btn-warning">
        Edit Data Foto
    </a>
</div>
@endif

@push('scripts')
    <!-- Previe Image -->
    <script>
        $(function() {
            $('.pops').on('click', function() {
                $('.fotoview').attr('src',$(this).find('img').attr('src'));
                $('#imagereview').modal('show');   
            });		
        });
    </script>
    <!--Akhir Previe Image -->
@endpush