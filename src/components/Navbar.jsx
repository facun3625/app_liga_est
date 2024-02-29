import { useRef } from "react";
import "../Styles/main.css";
import logoImage from "../img/logo.png";
import Burguer from "./Burguer";
import { Link } from "react-router-dom";

function NavBar() {
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
				<Link to={'src/components/Noticias'}>Noticias</Link>
				<Link to={'src/components/Posiciones'}>Posiciones</Link>
				
				
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

export default NavBar;