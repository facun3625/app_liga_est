import { useRef } from "react";
import "../Styles/main.css";
import logoImage from "../img/logo.png";
import Burguer from "./Burguer";

function Navbar() {
	const navRef = useRef();

	const showNavbar = () => {
		navRef.current.classList.toggle(
			"responsive_nav"
		);
	};

	return (
		<header>
			<img src={logoImage} alt="LOGO" className="logo" />
			<nav ref={navRef}>
				<a href="/#">Inicio</a>
				<a href="/#">Noticias</a>
				<a href="/#">Posiciones</a>
				<a href="/#">Fixture</a>
                <a href="/#">Promedios</a>
				<button
					className="nav-btn nav-close-btn"
					onClick={showNavbar}>
					
				</button>
			</nav>
			<button
				className="nav-btn"
				onClick={showNavbar}>
				<Burguer/>
			</button>
		</header>
	);
}

export default Navbar;