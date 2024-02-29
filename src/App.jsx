import NavBar from './components/NavBar'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import Posiciones from './components/Posiciones'
import Noticias from './components/Noticias'



function App() {
  return (
      <Router>
          <div>
            <NavBar/>
            <Routes>
              
                  <Route path={'src/components/Noticias'} Component={Noticias}> </Route>
                  <Route path={'src/components/Posiciones'} Component={Posiciones}> </Route>
                  
            </Routes>

          </div>
      </Router>
  )
}

export default App
