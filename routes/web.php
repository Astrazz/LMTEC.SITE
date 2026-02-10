<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AntesDepoisController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SlideController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('painel.home');

    //NOTICIAS
    Route::get('/gerenciar-noticias', [NoticiaController::class, 'index'])->name('noticias.index');
    Route::get('/noticia/create', [NoticiaController::class, 'create'])->name('noticia.create');
    Route::post('/noticia/store', [NoticiaController::class, 'store'])->name('noticia.store');
    Route::post('/noticia/{slug}', [NoticiaController::class, 'show'])->name('noticia.show');

    //PAGINAS
    Route::get('/paginas', [PaginaController::class, 'index'])->name('paginas.index');
    Route::get('/paginas/create', [PaginaController::class, 'create'])->name('pagina.create');
    Route::post('/paginas/create', [PaginaController::class, 'store'])->name('pagina.store');
    Route::get('/paginas/show/{id}', [PaginaController::class, 'show'])->name('pagina.show');
    Route::get('/paginas/delete/{id}', [PaginaController::class, 'delete'])->name('pagina.delete');

    //SERVIÇOS
    Route::get('/gerenciar-servicos', [ServicoController::class, 'index'])->name('servicos.index');
    Route::get('/servico/create', [ServicoController::class, 'create'])->name('servico.create');
    Route::post('/servico/create', [ServicoController::class, 'store'])->name('servico.store');
    Route::get('/servico/show/{id}', [ServicoController::class, 'show'])->name('servico.show');
    Route::post('/servico/update/{id}', [ServicoController::class, 'update'])->name('servico.update');
    Route::get('/passeio/foto-destroy/{id}', [ServicoController::class, 'FotoFestroy'])->name('foto.destroy');

    //ANTES E DEPOIS
    Route::get('/andes-e-depois', [AntesDepoisController::class, 'index'])->name('andes.depois.index');
    Route::get('/andes-e-depois/create', [AntesDepoisController::class, 'create'])->name('andes.depois.create');
    Route::post('/andes-e-depois/store', [AntesDepoisController::class, 'store'])->name('andes.depois.store');
    Route::get('/andes-e-depois/show/{id}', [AntesDepoisController::class, 'show'])->name('andes.depois.show');
    Route::post('/andes-e-depois/update/{id}', [AntesDepoisController::class, 'update'])->name('andes.depois.update');
    Route::get('/andes-e-depois/destroy/{id}', [AntesDepoisController::class, 'destroy'])->name('andes.depois.destroy');

    //SLIDES
    Route::get('/slides', [SlideController::class, 'index'])->name('slides.index');
    Route::get('/slide/create', [SlideController::class, 'create'])->name('slide.create');
    Route::post('/slide/create', [SlideController::class, 'store'])->name('slide.store');
    Route::get('/slide/show/{id}', [SlideController::class, 'show'])->name('slide.show');

    //ADMIN MARCAS
    Route::get('/marca/listar',[MarcaController::class,'index'])->middleware(['auth'])->name('marca.index');
    Route::get('/marca/cadastrar',[MarcaController::class,'create'])->middleware(['auth'])->name('marca.create');
    Route::post('/marca/cadastrar',[MarcaController::class,'store'])->middleware(['auth'])->name('marca.store');
    Route::get('/marca/editar/{id}',[MarcaController::class,'show'])->middleware(['auth'])->name('marca.show');
    Route::post('/marca/update/{id}', [MarcaController::class,'update'])->middleware(['auth'])->name('marca.update');
    Route::get('/marca/destroy/{id}', [MarcaController::class,'destroy'])->middleware(['auth'])->name('marca.destroy');

    //LEADS
    Route::get('/leads/index', [AdminHomeController::class,'LeadsConvertidos'])->name('leads.index');
    Route::post('/leads/update/{id}', [AdminHomeController::class,'LeadUpdate'])->name('leads.update');
});

//SITE
Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/quem-somos', [SiteController::class, 'aboutus'])->name('site.quem.somos');
Route::get('/clientes', [SiteController::class, 'clientes'])->name('site.clientes');
Route::get('/produtos', [SiteController::class, 'produtos'])->name('site.produtos');
Route::get('/servicos', [SiteController::class, 'servicos'])->name('site.servicos');
Route::get('/servico/{url}', [SiteController::class, 'servico'])->name('site.servico');
Route::get('/cases', [SiteController::class, 'cases'])->name('site.cases');
Route::get('/contato', [SiteController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'store'])->name('contato.store');
Route::post('/send-email', [ContatoController::class, 'QuoteStore'])->name('contato2.store');


Route::get('/storage-link', function () {
    Artisan::call('storage:link');
});

require __DIR__ . '/auth.php';
