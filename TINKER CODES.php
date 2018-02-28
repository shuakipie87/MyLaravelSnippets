//Tinker codes Adding Data

php artisan tinker

$post = App\Post::create(['title'=> 'New Post Tinker', 'content'=> 'New Content Tinker']);

// Add tinker data without save it to database

$post = new App\Post;

$post->title = "New Title Playground Object"
$post
$post->content = "New Content Playground Object"
$post->save();

// Reading Data Using Tinker

$post = App\Post::find(2);

//Update Data Using Tinker

$post = App\Post::find(1);
$post->title = "New Update Tinker 1"
$post->content = "New Update content Tinker 1"
$post->save();

//Delete Data Using Tinker
//Soft Delete
$post->delete();
//ForceDelete
$post = App\Post::onlyTrashed();
$post
$post->forceDelete();

//Relationships with Tinker

$user = App\User::find(1);
$user->roles  

