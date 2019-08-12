@if($errors->any())
        @foreach($errors->all() as $error)
        <script>
            toastr.error("{{ $error }} ",'FAILED');
         </script>
        @endforeach
@endif
<!-- validasi  untuk notifikasi field yang tidak di isi -->

@if(session()->has('success'))
<script>  
 toastr.success("{{ Session::get('success') }}",'SUCCESS' );
 </script>
@endif

@if(session()->has('error'))
<script>
toastr.warning("{{ Session::get('error') }}",'FAILED');
</script>
@endif


@if (session('status'))
<script>  
        toastr.success("{{ Session::get('status') }}",'SUCCESS' );
</script>
@endif


