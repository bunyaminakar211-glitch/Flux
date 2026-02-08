const express = require('express');
const app = express();
const port = process.env.PORT || 3000;

// EJS view engine kur
app.set('view engine', 'ejs');
app.use(express.static('public')); // CSS/JS/resim için public klasör

app.get('/', (req, res) => {
  res.render('index', {
    title: 'Termux Hack Araçları - Eğitim Amaçlı'
  });
});

// Diğer sayfalar için örnek route (ileride ekleyebilirsin)
app.get('/kurulum', (req, res) => {
  res.render('kurulum', { title: 'Termux Kurulum Rehberi' });
});

app.listen(port, () => {
  console.log(`Site çalışıyor: http://localhost:${port}`);
});
