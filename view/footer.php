    <script src="/resources/jquery.min.js"></script>
    <script src="/resources/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script>
        $('#lista a').on('click', function (e) {
            e.preventDefault();
            $(this).tab('show');
            buscar($(this).attr('name'));
        });
        $(window).on('load',function (e){
            let params = new URLSearchParams(location.search);
            if (params.get('u')!=null) $('#navbarUsuario').dropdown('toggle');
            if (params.get('car')!=null) $('#navbarDropdown').dropdown('toggle');
        });
    </script>
</body>
</html>