<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\assets\css\footer.css">
    <!-- <link rel="stylesheet" href="../../assets/css/bootstrap-grid.css"> -->
    <link rel="stylesheet" href="..\assets\css\general.css">
    <title>Document Title</title>
</head>
<body>
<!-- import React from "react";
import "./Footer.scss";
import { FaCarOn } from "react-icons/fa6";
import { ImFacebook } from "react-icons/im";
import { BsTwitter } from "react-icons/bs";
import { AiFillInstagram } from "react-icons/ai";
import img1 from "../Assets/Recurso 7.png"
 -->
        <div class="footer">
            <div class="secContainer container grid">
                <div class="logoDiv">
                    <div class="footerLogo">
                        <a href="<?= base_url('/')?>" class="logo">
                            <strong>SportClub</strong>
                        <!-- <img src={img1} alt="logoimg"/> -->
                        </a>
                    </div>
                    <div class="socials flex">
                    <i class="fa fa-facebook icon" aria-hidden="true"></i>
                    <i class="fa fa-twitter icon" aria-hidden="true"></i>
                    <i class="fa fa-instagram icon" aria-hidden="true"></i>
                    </div>
                <!-- </div> -->
                <div class="footerLinks">
                    <!-- <span class="linkTitle">
                        Links importante
                    </span> -->
                    <li>
                        <a href="<?= base_url('/contacto')?>">
                            Contacto
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('/comercializacion')?>">
                            Comercializacion
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('/terminos_y_condiciones')?>">
                            Terminos y condiciones
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('/quienes_somos')?>">
                         ¿Quienes somos?
                        </a>
                    </li>
                </div>
                <div class="footerLinks">
                    <span class="linkTitle">
                        Contactanos
                    </span>
                    <span class="email">
                        sportclub@gmail.com
                    </span>
                    <span class="email">
                        Sitio web desarrollado por <span><a href="https://www.linkedin.com/in/cesar-raul-huici-bb8782215/">Cesar Raul Huici</a></span>
                    </span>
                </div>
            </div>
        </div>
</body>
</html>