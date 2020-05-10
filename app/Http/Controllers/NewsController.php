<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogEntries;
use App\Models\User;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Returns the "news" view.
     *
     * @return Illuminate\Support\Facades\View
     */
    public function index()
    {
        $entries = BlogEntries::leftJoin(
            'users',
            'blog_entries.fk_users',
            '=',
            'users.id'
        )
        ->select(
            'users.name',
            'blog_entries.title',
            'blog_entries.entry',
            'blog_entries.updated_at'
        )
        ->paginate(5);

        return view('news', ['entries' => $entries]);
    }

    /**
     * Returns the "news" view with only selected entry.
     *
     * @param integer
     * @return Illuminate\Support\Facades\View
     */
    public function getEntry($entry)
    {
        $entries = BlogEntries::join(
            'users',
             function ($join) use ($entry) {
                $join->on(
                    'blog_entries.fk_users',
                    '=',
                    'users.id'
                )
                ->where(
                    'blog_entries.id',
                    '=',
                    $entry
                );
            }
        )
        ->select(
            'users.name',
            'blog_entries.title',
            'blog_entries.entry',
            'blog_entries.updated_at'
        )
        ->paginate(5);

        return view('news', ['entries' => $entries]);
    }
}
