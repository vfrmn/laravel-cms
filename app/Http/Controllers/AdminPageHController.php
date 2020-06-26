<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class AdminPageHController extends Controller
{
    private $order_type_id;
    private $sort = 1;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $page = Page::find(\request()->parent ?? 1);
        $this->order_type_id = \request()->input('order_type_num');
        if (\request()->input('sort') == 1) $this->sort = 0;
        else $this->sort = 1;
        if ($this->order_type_id != null){
            if ($this->sort == 1)
                $children = $page->children->where('id','!=', 1)->sortBy($this->order_type_id);
            else
                $children = $page->children->where('id','!=', 1)->sortByDesc($this->order_type_id);
        }
        else
            $children = $page->children->where('id','!=', 1);
        return view('admin.index', compact('page', 'children'), ['order_type_id' => $this->order_type_id ,'sort' => $this->sort]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Page::create(request()->all());
        return redirect()->route('pages.index', 'parent='.$request->input('parent_id'))->with('success', 'Успішно створено!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show($id)
    {
        return redirect()->route('page', Page::find($id)->caption);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $page = Page::find($id);
//        dd($page->getAttributes());
        return view('admin.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $page = Page::find($id)->update($request->all());
        if ($page)
            return back()->withInput()->with('success', 'Успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $parent_id = $page->parent->id;
        $page->delete()
;        return redirect()->route('pages.index', 'parent='.$parent_id)->with('success', 'Успішно видалено!');
    }
}
