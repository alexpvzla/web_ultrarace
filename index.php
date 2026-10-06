<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UltraRace App - Centro de Descargas</title>
    <link rel="icon" type="image/x-icon" href="images/ur.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fbf9f9;
            color: #ffffff;
            min-height: 100vh;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
            border-bottom: 2px solid #ff6b00;
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav a {
            color: #cccccc;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ff6b00;
        }

        /* Banner */
        .banner {
            width: 100%;
            overflow: hidden;
        }

        .banner-img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* App Button */
        .app-section {
            text-align: center;
            padding: 40px 20px;
            background: #111111;
        }

        .btn-app {
            background: linear-gradient(135deg, #ff6b00 0%, #ff8c00 100%);
            color: white;
            padding: 18px 50px;
            border: none;
            border-radius: 30px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-app:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255, 107, 0, 0.5);
        }

        /* Download Section */
        .download-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 36px;
            color: #ffffff;
            margin-bottom: 15px;
        }

        .section-title h2 span {
            color: #ff6b00;
        }

        .section-title p {
            color: #888888;
            font-size: 18px;
        }

        .sub-section-title {
            grid-column: 1 / -1;
            margin: 40px 0 20px;
            font-size: 24px;
            color: #4a90e2;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid #4a90e2;
            padding-bottom: 10px;
        }

        /* Downloads Grid - Tecnoapac Style */
        .downloads-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 20px;
        }

        .download-item {
            background: linear-gradient(145deg, #1a1a1a 0%, #121212 100%);
            border: 1px solid #2a2a2a;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: transform 0.3s, border-color 0.3s;
        }

        .download-item:hover {
            transform: translateY(-3px);
            border-color: #ff6b00;
        }

        .file-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .file-info i {
            font-size: 32px;
            color: #ff6b00;
            width: 40px;
            text-align: center;
        }

        .file-info h3 {
            font-size: 16px;
            color: #ffffff;
            margin-bottom: 4px;
        }

        .file-info p {
            font-size: 13px;
            color: #888888;
        }

        .btn-download {
            background: linear-gradient(135deg, #ff6b00 0%, #ff8c00 100%);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            white-space: nowrap;
        }

        .btn-download:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(255, 107, 0, 0.4);
        }

        /* Footer */
        footer {
            background: #0a0a0a;
            padding: 60px 20px 30px;
            border-top: 2px solid #ff6b00;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h4 {
            color: #ff6b00;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .footer-section p {
            color: #888888;
            font-size: 14px;
            line-height: 1.8;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul a {
            color: #888888;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-section ul a:hover {
            color: #ff6b00;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #2a2a2a;
            color: #666666;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 20px;
            }

            nav ul {
                gap: 15px;
            }

            .downloads-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#descargas">Descargas</a></li>
                    <li><a href="#soporte">Soporte</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="banner" id="inicio">
        <img src="images/barner.png" alt="UltraRace Banner" class="banner-img">
    </section>

    <section class="app-section">
        <a href="https://sistema.ultraraceapp.com" target="_blank" class="btn-app">
            <i class="fa-solid fa-globe"></i> Acceder al Sistema
        </a>
    </section>

    <section class="download-section" id="descargas">
        <div class="section-title">
            <h2> <span>Centro de Descargas</span></h2>
            <p>Archivos, instaladores y herramientas disponibles.</p>
        </div>

        <div class="downloads-grid">

            <h3 class="sub-section-title">Software</h3>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-zipper"></i>
                    <div>
                        <h3>Crystal Report 4</h3>
                        <p>Archivo ZIP</p>
                    </div>
                </div>
                <a href="downloads/Cristal Report.zip" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-zipper"></i>
                    <div>
                        <h3>Crystal Report 10</h3>
                        <p>Archivo ZIP</p>
                    </div>
                </div>
                <a href="downloads/CRYSTAL REPORT 10.zip" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-zipper"></i>
                    <div>
                        <h3>Mysql Conector</h3>
                        <p>Archivo ZIP</p>
                    </div>
                </div>
                <a href="downloads/mysql-connector-odbc.zip" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-zipper"></i>
                    <div>
                        <h3>Mysql Query Browser</h3>
                        <p>Archivo ZIP</p>
                    </div>
                </div>
                <a href="downloads/mysql-query-browser-1.1.20-win.zip" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-zipper"></i>
                    <div>
                        <h3>Mysql Administrator</h3>
                        <p>Archivo ZIP</p>
                    </div>
                </div>
                <a href="downloads/mysql-administrator-1.1.8-win.zip" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-zipper"></i>
                    <div>
                        <h3>Mysql 5</h3>
                        <p>Archivo ZIP</p>
                    </div>
                </div>
                <a href="downloads/mysql5.zip" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-code"></i>
                    <div>
                        <h3>Win Rar</h3>
                        <p>Instalador EXE</p>
                    </div>
                </div>
                <a href="downloads/wrar340.exe" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-code"></i>
                    <div>
                        <h3>Rustdesk 1.4.9 para win 32 bits</h3>
                        <p>Instalador EXE</p>
                    </div>
                </div>
                <a href="downloads/rustdesk-1.4.9-x86-sciter.exe" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-code"></i>
                    <div>
                        <h3>Rustdesk 1.4.8 para win 64 bits</h3>
                        <p>Instalador EXE</p>
                    </div>
                </div>
                <a href="downloads/rustdesk-1.4.9-x86_64.exe" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                     <i class="fa-solid fa-file-code"></i>
                    <div>
                        <h3>Tablas y Puestos </h3>
                        <p>Instalador EXE</p>
                    </div>
                </div>
                <a href="downloads/InstaladorTp_2901.exe" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-zipper"></i>
                    <div>
                        <h3>TP Admin</h3>
                        <p>Archivo RAR</p>
                    </div>
                </div>
                <a href="downloads/InstaladorTpAdmin21010.rar" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-code"></i>
                    <div>
                        <h3>Conector Principal</h3>
                        <p>Instalador MSI</p>
                    </div>
                </div>
                <a href="downloads/mariadb-connector-odbc-3.2.8-win32.msi" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-code"></i>
                    <div>
                        <h3>Nacionales</h3>
                        <p>Instalador EXE</p>
                    </div>
                </div>
                <a href="downloads/InstUR_Nac_v40004.exe" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-code"></i>
                    <div>
                        <h3>Nacionales 2</h3>
                        <p>Instalador EXE</p>
                    </div>
                </div>
                <a href="downloads/InstCd_V40004.exe" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-zipper"></i>
                    <div>
                        <h3>Ultra Race 1.1.54</h3>
                        <p>Archivo RAR</p>
                    </div>
                </div>
                <a href="downloads/InstaladorUR_Int_1.54.rar" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            </div>

        <div class="downloads-grid">
            <h3 class="sub-section-title">Drivers de Impresoras</h3>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-code"></i>
                    <div>
                        <h3>Post 58</h3>
                        <p>Instalador EXE</p>
                    </div>
                </div>
                <a href="downloads/POS-58-Setup.exe" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

             <div class="download-item">
                <div class="file-info">
                   <i class="fa-solid fa-file-zipper"></i>
                    <div>
                        <h3>Post 80</h3>
                        <p>Archivo RAR</p>
                    </div>
                </div>
                <a href="downloads/POS Printer Driver Setup V7.17.exe" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>


             <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-code"></i>
                    <div>
                        <h3>Star Tsp 100</h3>
                        <p>Instalador EXE</p>
                    </div>
                </div>
                <a href="downloads/tsp100_V770_setup.exe" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

            <div class="download-item">
                <div class="file-info">
                    <i class="fa-solid fa-file-zipper"></i>
                    <div>
                        <h3>Q3</h3>
                        <p>Instalador RAR</p>
                    </div>
                </div>
                <a href="downloads/Q3.rar" download class="btn-download">
                    <i class="fa-solid fa-download"></i> Descargar
                </a>
            </div>

        </div>    </section>

    <footer id="soporte">
        <div class="footer-container">
            <div class="footer-section">
                <h4>UltraRace App</h4>
                <p>Somos un equipo dedicado a crear software de alta calidad, accesible para todos. Nuestra misión es proporcionar herramientas potentes sin barreras económicas.</p>
            </div>
            <div class="footer-section">
                <h4>Enlaces Rápidos</h4>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Descargas</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Soporte</h4>
                <ul>
                    <li><a href="#">Centro de Ayuda</a></li>

                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 UltraRace App. Todos los derechos reservados. Software de acceso libre y gratuito.</p>
        </div>
    </footer>
</body>
</html>
