<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Batas Utara :</label>
            <b>{{$wasdal->utara}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Batas Selatan :</label>
            <b>{{$wasdal->selatan}}</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Batas Timur :</label>
            <b>{{$wasdal->timur}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Batas Barat :</label>
            <b>{{$wasdal->barat}}</b>
        </div>
    </div>
</div>

<h5 class="card-title">Catatan Bagi Penghuni</h5>
<p class="small fst-italic">{{$wasdal->catatan}}</p>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">SITUASI (Altitude pada Google Maps = 200 m )</label> <br><br>
            <a href="#" class="pop">
                <img src="{{ (!empty($wasdal->situasi))? url('image/wasdal/situasi/'.$wasdal->situasi):url('img/no-image.jpg') }}" alt="gambar" width="120" height="90">
            </a>
            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">							   
                    <div class="modal-content">         						      
                        <div class="modal-body">                                                  
                            <img src="{{ (!empty($wasdal->situasi))? url('image/wasdal/situasi/'.$wasdal->situasi):url('img/no-image.jpg') }}" class="imagepreview" id="img-show" style="width: 100%;">                      
                        </div>							    
                    </div>								   
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <label for="" class="label">SITEPLAN (Altitude pada Google Maps = 20 m )</label> <br><br>
            <a href="#" class="pop">
                <img src="{{ (!empty($wasdal->siteplan))? url('image/wasdal/siteplan/'.$wasdal->siteplan):url('img/no-image.jpg') }}" alt="gambar" width="120" height="90">
            </a>
            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">							   
                    <div class="modal-content">         						      
                        <div class="modal-body">                                                  
                            <img src="{{ (!empty($wasdal->siteplan))? url('image/wasdal/siteplan/'.$wasdal->siteplan):url('img/no-image.jpg') }}" class="imagepreview" id="img-show" style="width: 100%;">                      
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
            <label for="" class="label">Lingkungan </label> <br><br>
            <a href="#" class="pop">
                <img src="{{ (!empty($wasdal->foto_lingkungan1))? url('image/wasdal/foto_lingkungan1/'.$wasdal->foto_lingkungan1):url('img/no-image.jpg') }}" alt="gambar" width="120" height="90">
            </a>
            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">							   
                    <div class="modal-content">         						      
                        <div class="modal-body">                                                  
                            <img src="{{ (!empty($wasdal->foto_lingkungan1))? url('image/wasdal/foto_lingkungan1/'.$wasdal->foto_lingkungan1):url('img/no-image.jpg') }}" class="imagepreview" id="img-show" style="width: 100%;">                      
                        </div>							    
                    </div>								   
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <label for="" class="label">Lingkungan</label> <br><br>
            <a href="#" class="pop">
                <img src="{{ (!empty($wasdal->foto_lingkungan2))? url('image/wasdal/foto_lingkungan2/'.$wasdal->foto_lingkungan2):url('img/no-image.jpg') }}" alt="gambar" width="120" height="90">
            </a>
            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">							   
                    <div class="modal-content">         						      
                        <div class="modal-body">                                                  
                            <img src="{{ (!empty($wasdal->foto_lingkungan2))? url('image/wasdal/foto_lingkungan2/'.$wasdal->foto_lingkungan2):url('img/no-image.jpg') }}" class="imagepreview" id="img-show" style="width: 100%;">                      
                        </div>							    
                    </div>								   
                </div>
            </div>
        </div>
    </div>
</div>

@if (Auth::check() && Auth::user()->role  == "superadmin")
<div class="text-center">
    <a href="{{ route('wasdal.lokasi', ['wasdal_id'=>$wasdal->id]) }}" class="btn btn-warning">
        Edit Data Lokasi
    </a>
</div>
@endif