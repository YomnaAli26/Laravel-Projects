<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\rateArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class RateController extends Controller
{
    public function store(Request $request, $id)
    {
        $rate = rateArticle::where("article_id", $id)->pluck("rate");
        $article = Article::find($id);
        if ($rate->isEmpty())
        {
            $data = $request->all();
            $data['article_id'] = $id;
            $data['user_id'] = Auth::id();
            rateArticle::create($data);
            alert()->message('Rate Added Successfully');
            return view("site.user.adult.articles.show", compact('article'));
        }
        else
        {
            alert()->message('You Can\'t Rate the Article more than once');
            return view("site.user.adult.articles.show", compact('article'));

        }
    }
}
