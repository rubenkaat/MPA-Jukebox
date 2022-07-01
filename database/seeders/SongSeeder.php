<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //genre: black metal
        DB::table('songs')->insert([ 'name' => 'Waters of Ain', 'artist' => 'Watain', 'duration' => '871', 'genre_id' => '1', 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2b/Lawless_Darkness_cover.jpg']);
        DB::table('songs')->insert([ 'name' => 'Fair Lucifer, Sad Relic', 'artist' => 'Spectral Wound', 'duration' => '309', 'genre_id' => '1', 'image' => 'https://f4.bcbits.com/img/a3636588256_10.jpg']);
        DB::table('songs')->insert([ 'name' => 'Woods From Which The Spirits Once So Loudly Howled', 'artist' => 'Spectral Wound', 'duration' => '361', 'genre_id' => '1', 'image' => 'https://f4.bcbits.com/img/a1217992685_10.jpg']);
        DB::table('songs')->insert([ 'name' => 'Ontzieling', 'artist' => 'Wiegedood', 'duration' => '452', 'genre_id' => '1', 'image' => 'https://f4.bcbits.com/img/a1943642741_10.jpg']);
        DB::table('songs')->insert([ 'name' => 'Cataract', 'artist' => 'Wiegedood', 'duration' => '670', 'genre_id' => '1', 'image' => 'https://f4.bcbits.com/img/a1943642741_10.jpg']);
        
        //genre: death metal
        DB::table('songs')->insert([ 'name' => 'Bring Back The Plague', 'artist' => 'Cattle Decapitation', 'duration' => '268', 'genre_id' => '2', 'image' => 'https://www.amped-up.be/wp-content/uploads/2019/12/cattle-decapitation-death-atlas-album-cover.jpg']);
        DB::table('songs')->insert([ 'name' => 'Slaves Beyond Death', 'artist' => 'Thy Art Is Murder', 'duration' => '224', 'genre_id' => '2', 'image' => 'https://media.s-bol.com/l2yykrLJYGLM/550x550.jpg']);
        DB::table('songs')->insert([ 'name' => 'Misanthrope', 'artist' => 'Death', 'duration' => '363', 'genre_id' => '2', 'image' => 'https://cdns-images.dzcdn.net/images/cover/da9191143f075130820df26553cd31ad/264x264.jpg']);
        DB::table('songs')->insert([ 'name' => 'Zombie Ritual', 'artist' => 'Death', 'duration' => '273', 'genre_id' => '2', 'image' => 'https://m.media-amazon.com/images/I/91jKEUhPH7L._AC_SY450_.jpg']);
        DB::table('songs')->insert([ 'name' => 'Spirit Crusher', 'artist' => 'Death', 'duration' => '407', 'genre_id' => '2', 'image' => 'https://m.media-amazon.com/images/I/711DDN4x3UL._AC_SL1500_.jpg']);

        //genre: deathcore
        DB::table('songs')->insert([ 'name' => 'Sun//Eater', 'artist' => 'Lorna Shore', 'duration' => '370', 'genre_id' => '3', 'image' => 'https://static.qobuz.com/images/covers/la/mk/f3i2wanohmkla_600.jpg']);
        DB::table('songs')->insert([ 'name' => 'Blasphemian', 'artist' => 'Infant Annihilator', 'duration' => '444', 'genre_id' => '3', 'image' => 'https://m.media-amazon.com/images/I/81Jsi6oqONL._AC_SY450_.jpg']);
        DB::table('songs')->insert([ 'name' => 'Demon King', 'artist' => 'Brand Of Sacrifice', 'duration' => '237', 'genre_id' => '3', 'image' => 'https://cdn2.albumoftheyear.org/375x/album/507991-demon-king-feat-ryo-kinoshita.jpg']);
        DB::table('songs')->insert([ 'name' => 'Blood In The Sands Of Time', 'artist' => 'Shadow Of Intent', 'duration' => '322', 'genre_id' => '3', 'image' => 'https://images.genius.com/23028c96d358ee2a0a97aa4d9c4766f6.1000x1000x1.jpg']);
        DB::table('songs')->insert([ 'name' => 'Malediction', 'artist' => 'Shadow Of Intent', 'duration' => '340', 'genre_id' => '3', 'image' => 'https://i.scdn.co/image/ab67616d0000b27392113d29eea01384c091674c']);

        //genre: Country
        DB::table('songs')->insert([ 'name' => 'She Thinks My Tractors Sexy', 'artist' => 'Kenny Chesney', 'duration' => '248', 'genre_id' => '4', 'image' => 'https://i.scdn.co/image/ab67616d0000b273a7e1e1bc8ddf0e767c056ea6']);
        DB::table('songs')->insert([ 'name' => 'Quit Your Bithin', 'artist' => 'Rebel Son', 'duration' => '175', 'genre_id' => '4', 'image' => 'https://i.scdn.co/image/ab67616d0000b2736dd6fc6f90ae3a82dc22a8e6']);
        DB::table('songs')->insert([ 'name' => 'Amos Moses', 'artist' => 'Jerry Reed', 'duration' => '139', 'genre_id' => '4', 'image' => 'https://i.scdn.co/image/ab67616d0000b2732f06de0d10c2083f442ac8c7']);
        DB::table('songs')->insert([ 'name' => 'Oerend Hard', 'artist' => 'Normaal', 'duration' => '224', 'genre_id' => '4', 'image' => 'https://i.scdn.co/image/ab67616d0000b2739d8723b55d7a205c45c12e74']);
        DB::table('songs')->insert([ 'name' => 'Piss Up A Rope', 'artist' => 'Ween', 'duration' => '213', 'genre_id' => '4', 'image' => 'https://m.media-amazon.com/images/I/81LK2m0nlJL._SS500_.jpg']);

        //genre: Doom Metal
        DB::table('songs')->insert([ 'name' => 'Bottled Insanity', 'artist' => 'Eastern High', 'duration' => '289', 'genre_id' => '5', 'image' => 'https://m.media-amazon.com/images/I/81QlkUnZFAL._SS500_.jpg']);
        DB::table('songs')->insert([ 'name' => 'Footprints', 'artist' => 'Warning', 'duration' => '451', 'genre_id' => '5', 'image' => 'https://f4.bcbits.com/img/a0231669382_10.jpg']);
        DB::table('songs')->insert([ 'name' => 'Puritan Masochism', 'artist' => 'Konvent', 'duration' => '281', 'genre_id' => '5', 'image' => 'https://f4.bcbits.com/img/a0316218482_10.jpg']);
        DB::table('songs')->insert([ 'name' => 'Trust', 'artist' => 'Konvent', 'duration' => '317', 'genre_id' => '5', 'image' => 'https://i.scdn.co/image/ab67616d0000b273c2e02fa84cc5824d0a57ab37']);
        DB::table('songs')->insert([ 'name' => 'The Will To Die', 'artist' => 'Funeral', 'duration' => '378', 'genre_id' => '5', 'image' => 'https://i.scdn.co/image/ab67616d0000b27388cf5655c096b9a5d442bed4']);
    }
}