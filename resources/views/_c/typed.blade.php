@section('bot_scripts')
   <script type="text/javascript" src="{{asset('js/typed.min.js')}}"></script>
   <script>
	  var typed = new Typed('#typed', {
	    strings: [
                "Selamat Datang Di Website Perwakilan BPKP Provinsi Sulawesi Barat", 
                "Kami Siap Membantu Jasa <i>Assurance</i> dan <i>Consulting</i> ",
                "Kami Siapkan Data dan Informasi",
                "Kita Kerja Bersama Menuju Sulawesi Barat Malaqbi"
            ],
        typeSpeed: 50,
        backSpeed: 0,
        fadeOut: true,
        loop: true
	  });
	</script>
    <style>
        .write 
        {
            font-size: 14px;
            color: #000;
        }
    </style>
 @endsection

<div class="row text-center bold" style="border: 1px solid #ccc; margin:none; padding:3px; background:#fff;">
    <span id="typed" ></span>
</div>
 