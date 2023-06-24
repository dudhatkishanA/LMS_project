<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutherController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookissueController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::get('/authorlist',[AutherController::class,'author_list'])->name('author.list');
Route::get('/add_author',[AutherController::class,'add_author'])->name('add.author');
Route::post('/insert_author',[AutherController::class,'insertAuthor'])->name('insert.author');
Route::get('/edit_author/{id}',[AutherController::class,'editAuthor'])->name('edit.author');
Route::post('/update_author',[AutherController::class,'updateAuthor'])->name('update.author');
Route::get('/delete_author/{id}',[AutherController::class,'deleteAuthor'])->name('delete.author');


Route::get('/booklist',[BookController::class,'book_list'])->name('book.list');
Route::get('/add_book',[BookController::class,'add_book'])->name('add.book');
Route::post('/insert_book',[BookController::class,'insertBook'])->name('insert.book');
Route::get('/edit_book/{id}',[BookController::class,'editBook'])->name('edit.book');
Route::post('/update_book',[BookController::class,'updateBook'])->name('update.book');
Route::get('/delete_book/{id}',[BookController::class,'deleteBook'])->name('delete.book');


Route::get('/bookissuelist',[BookissueController::class,'bookissue_list'])->name('bookissue.list');
Route::get('/add_bookissue',[BookissueController::class,'add_bookissue'])->name('add.bookissue');
Route::post('/insert_bookissue',[BookissueController::class,'insertBookissue'])->name('insert.bookissue');
Route::get('/edit_bookissue/{id}',[BookissueController::class,'editBookissue'])->name('edit.bookissue');
Route::post('/update_bookissue',[BookissueController::class,'updateBookissue'])->name('update.bookissue');
Route::get('/delete_bookissue/{id}',[BookissueController::class,'deleteBookissue'])->name('delete.bookissue');


Route::get('/categorieslist',[CategoriesController::class,'categories_list'])->name('categories.list');
Route::get('/add_categories',[CategoriesController::class,'add_categories'])->name('add.categories');
Route::post('/insert_categories',[CategoriesController::class,'insertCategories'])->name('insert.categories');
Route::get('/edit_categories/{id}',[CategoriesController::class,'editCategories'])->name('edit.categories');
Route::post('/update_categories',[CategoriesController::class,'updateCategories'])->name('update.categories');
Route::get('/delete_categories/{id}',[CategoriesController::class,'deleteCategories'])->name('delete.categories');



Route::get('/publisherlist',[PublisherController::class,'publisher_list'])->name('publisher.list');
Route::get('/add_publisher',[PublisherController::class,'add_publisher'])->name('add.publisher');
Route::post('/insert_publisher',[PublisherController::class,'insertPublisher'])->name('insert.publisher');
Route::get('/edit_publisher/{id}',[PublisherController::class,'editPublisher'])->name('edit.publisher');
Route::post('/update_publisher',[PublisherController::class,'updatePublisher'])->name('update.publisher');
Route::get('/delete_publisher/{id}',[PublisherController::class,'deletePublisher'])->name('delete.publisher');


Route::get('/studentlist',[StudentController::class,'student_list'])->name('student.list');
Route::get('/add_student',[StudentController::class,'add_student'])->name('add.student');
Route::post('/insert_student',[StudentController::class,'insertStudent'])->name('insert.student');
Route::get('/edit_student/{id}',[StudentController::class,'editStudent'])->name('edit.student');
Route::post('/update_student',[StudentController::class,'updateStudent'])->name('update.student');
Route::get('/delete_student/{id}',[StudentController::class,'deleteStudent'])->name('delete.student');


});
require __DIR__.'/auth.php';

Route::get('/authors', [AutherController::class, 'index'])->name('authors');

