const express = require('express');
const authController = require('../controllers/auth');

const router = express.Router();

router.get('/', authController.isLoggedIn, (req, res) => {
  res.render('index', {
    user: req.user
  });
});

router.get('/register', (req, res) => {
  res.render('register');
});

router.get('/login', (req, res) => {
  res.render('login');
});
router.get('/multiplayer', (req, res) => {
  res.render('multiplayer');
});
router.get('/singleplayer', (req, res) => {
  res.render('singleplayer');
});


router.get('/profile', authController.isLoggedIn, (req, res) => {
 console.log(req.user);
  if( req.user ) {
    res.render('profile', {
      user: req.user
    });
  } else {
    res.redirect('/login');
  }
  
});
router.get('/contact', (req, res) => {
  res.render('contact');
});




module.exports = router;