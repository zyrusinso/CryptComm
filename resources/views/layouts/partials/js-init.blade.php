<script>
    if(!localStorage.getItem('color')){
        localStorage.setItem('color', 'color-2');
        localStorage.setItem('secondary', '#f25f4c');
        localStorage.setItem('primary', '#d97f3d');
        document.location.reload();
    }
</script>