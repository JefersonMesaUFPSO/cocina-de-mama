<!-- <footer class="main-footer" style="width: 100%; position: fixed; bottom: 0; left: 0; background-color: #f8f9fa; padding: 10px; text-align: center; box-shadow: 0 -2px 5px rgba(0,0,0,0.1);">
    <strong>Copyright &copy; 2025 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.1.1
    </div>
</footer> -->
<footer class="main-footer">
    <div class="footer-logo">
        <img src="{{ asset('img/cocina.webp') }}" alt="Logo" class="logo-img">
    </div>
    <div class="social-icons">
        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a> <!-- Logo antiguo de Twitter -->
        <a href="https://x.com" target="_blank"><i class="fab fa-x-twitter"></i></a> <!-- Logo nuevo de X -->
    </div>
    <div class="footer-text">
        <strong>Copyright &copy; 2025 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>  
        All rights reserved.
    </div>
    <div class="version-info">
        <b>Version</b> 1.1.1
    </div>
</footer>

<style>
.main-footer {
    width: 100%;
    position: fixed;
    bottom: 0;
    left: 0;
    background-color: #23211f;
    color: white;
    text-align: center;
    padding: 15px 10px;
    box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
}

.footer-logo {
    margin-bottom: 10px;
    display: flex;
    justify-self:center;
   
}


.footer-logo img {
    width: 80px; /* Ajusta el tamaño del logo */
    height: auto;
    border-radius: 50%;
}

.social-icons {
    margin-bottom: 10px;
    display: flex;
    justify-self:center;
    margin-left: 20px;
}

.social-icons a {
    color: white;
    font-size: 20px;
    margin: 0 10px;
    transition: 0.3s;
}

.social-icons a:hover {
    color: #1da1f2;
}

.footer-text {
    font-size: 14px;
    margin-top: 5px;
}

.version-info {
    font-size: 12px;
    margin-top: 5px;
    opacity: 0.7;
}
</style>




