// Inisialisasi dek kartu UNO
const unoDeck = [
   '0-Red', '1-Red', '2-Red', '3-Red', '4-Red', '5-Red', '6-Red', '7-Red', '8-Red', '9-Red',
   '0-Blue', '1-Blue', '2-Blue', '3-Blue', '4-Blue', '5-Blue', '6-Blue', '7-Blue', '8-Blue', '9-Blue',
   // Tambahkan kartu lain sesuai aturan UNO (misalnya, Wild cards, Reverse, Skip, Draw Two)
 ];
 
 // Acak dek
 function shuffleDeck(deck) {
   for (let i = deck.length - 1; i > 0; i--) {
     const j = Math.floor(Math.random() * (i + 1));
     [deck[i], deck[j]] = [deck[j], deck[i]];
   }
 }
 
 // Bagikan kartu ke pemain
 function dealCards(deck, numCards) {
   const playerHand = [];
   for (let i = 0; i < numCards; i++) {
     playerHand.push(deck.pop());
   }
   return playerHand;
 }
 
 // Inisialisasi permainan
 shuffleDeck(unoDeck);
 const playerHand = dealCards(unoDeck, 7);
 const computerHand = dealCards(unoDeck, 7);
 
 // Logika permainan dapat diterapkan di sini, termasuk aturan permainan, giliran pemain, dll.
 
 // Contoh fungsi untuk memainkan kartu
 function playCard(playerHand, card) {
   const index = playerHand.indexOf(card);
   if (index !== -1) {
     // Implementasikan logika pemain memainkan kartu di sini
     playerHand.splice(index, 1); // Hapus kartu dari tangan pemain
   } else {
     console.log('Anda tidak dapat memainkan kartu ini.');
   }
 }
 
 console.log('Kartu di tangan Anda: ', playerHand);
 console.log('Kartu di tangan Komputer: ', computerHand);