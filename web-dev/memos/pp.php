<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css2/pp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="img/Memos-logo-copy.png" type="image/png">
    <title>Product page</title>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <div class="logos">
                <a href="memos" class="nav-logo"></a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="memos" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="productpage" class="nav-link">VEJLE WATCH</a>
                </li>
                <li class="nav-item">
                    <a href="aboutus" class="nav-link">ABOUT</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <h2>Vejle watch</h2>
            <p>5 ATM water resistance </p>
            <p> Diameter 40mm x 20mm x 10 height</p>
            <p> Clock work: Miyota S611</p> <br>
            <h3>Material</h3>
            <p>stainless steel</p>
            <p>crystal sapphire</p>
            <p>case: 316 L stainless steel </p>
        </section>
        <div class="art">
            <img src="./image/_MG_0206.jpg" alt="watch">
            <hr>
            <table>
                <tr>
                    <th>QUANTITY</th>
                    <th>PRICE</th>
                </tr>
                <tr>
                    <td>
                        <form>
                            <input type="number">
                        </form>
                    </td>
                    <td class="right">1500dkk </td>
                </tr>
            </table>
            <hr>
            <button onclick="document.location='checkout'">checkout now</button>
        </div>
        <div>
            <ul>
                <li>DESIGNED IN DENMARK</li>
                <li>MADE IN CHINA</li>
            </ul>

        </div>
    </main>

    <footer>
        <div class="socialmedia">
            <br><br>
            <a class="nav-link2" href="https://www.instagram.com/" title="instagram" target="_blank"
                rel="noopener noreferrer">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a class="nav-link2" href="https://www.facebook.com/" title="facebook" target="_blank"
                rel="noopener noreferrer">
                <i class="fab fa-facebook-f fa-2x"></i>
            </a>
            <a class="nav-link2" href="https://www.linkedin.com/" title="linkedin" target="_blank"
                rel="noopener noreferrer">
                <i class="fab fa-linkedin-in fa-2x"></i>
            </a>
        </div>
        <div class="links">
            <br>
            <a class="nav-link2" href="aboutus">about</a>
            <br>
            <a class="nav-link2" href="privacy">privacy policy</a>
            <br>
            <a class="nav-link2" href="terms">terms and conditions</a>
            <br>
        </div>
        <p class="copyright">2022 © MEMOS.dk</p>
        <script src="../MEMOS/java/menu.js"></script>
    </footer>
</body>

</html>