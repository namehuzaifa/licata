@section('style')

    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/vendors/css/editors/quill/quill.bubble.css">

    <style>
        .ql-editor {min-height: 200px;}

    </style>
@endsection

@section('scripts')
<script src="{{ asset('') }}app-assets/vendors/js/vendors.min.js"></script>


<script src="{{ asset('') }}app-assets/vendors/js/editors/quill/katex.min.js"></script>
<script src="{{ asset('') }}app-assets/vendors/js/editors/quill/highlight.min.js"></script>
<script src="{{ asset('') }}app-assets/vendors/js/editors/quill/quill.min.js"></script>
<script src="{{ asset('') }}app-assets/vendors/js/editors/quill/image-resize.min.js"></script>
<script>
var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],

            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'direction': 'rtl' }],                         // text direction

            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],

            ['clean'],                                         // remove formatting button
            ['link', 'image'],

        ];

        // var container = document.getElementById('editor');
        // console.log(container)
        var container = $('.editor');
        $.each( container, function( key, value ) {
            var editor = new Quill(value);
            var quill = new Quill(value, {
                modules: {
                    imageResize: { displaySize: true }, // default false
                    toolbar: toolbarOptions,
                },
                theme: 'snow'
            });
        });

        function runQuill(id) {
            // alert(id)
            var container = document.getElementById(id);
            var editor = new Quill(container);
            var quill = new Quill(container, {
                modules: {
                    imageResize: { displaySize: true }, // default false
                    toolbar: toolbarOptions,
                },
                theme: 'snow'
            });
        }



        $("form.form").submit(function(eventObj){
        // $(".test").click(function(eventObj){
            var html = $('.ql-editor');
            $.each( html, function( key, value ) {
                $("<input />").attr("type", "hidden").attr("name", "description").attr("value", value.innerHTML).appendTo("form.form");
            });

            return true;
        });
    </script>
@endsection
