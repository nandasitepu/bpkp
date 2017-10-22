@section('bot_scripts')
<script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>


<script type="text/javascript">
    
	$(function(){
        $(".write").typed({
            strings: [
                "Selamat Datang Di Website Perwakilan BPKP Provinsi Sulawesi Barat", 
                "Kami Siap Membantu Jasa <i>Assurance</i> dan <i>Consulting</i> ",
                "Kami Siapkan Data dan Informasi",
                "Kita Kerja Bersama Menuju Sulawesi Barat Malaqbi"
            ],
            smartBackspace: true,
            typeSpeed: 1,
            fadeOut: true,
            fadeOutDelay: 0,
            loop: true
        });
    });

</script>


@endsection
@section('more-css')
    <style>
        .write 
        {
            font-size: 14px;
            color: #000;
        }
    </style>

@endsection

<div class="text-center" style="border: 1px solid #ccc; margin:none; padding:3px; background:#fff;">
  <b><span class="write"></span></b>
</div>
