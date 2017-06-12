@if(Session::has('info'))
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script>
        Materialize.toast( '{{ Session::get('info') }}' ,3000);
    </script>
@endif