<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use TCG\Voyager\Models\DataType;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        /** @var Account $accounts */
        $accounts = Account::paginate();
        /** @var DataType $data_type */
        $data_type = DataType::where('name', 'accounts')->first();
//        $data_type_content = $accounts->paginate
        return view('voyager::accounts.browse')
            ->with('dataType', $data_type)
            ->with('usesSoftDeletes', false)
            ->with('actions',[])
            ->with('isServerSide', true)
            ->with('searchNames', [])
            ->with('search', )
            ->with('showCheckboxColumn', false )
            ->with('isModelTranslatable', false )
            ->with('sortableColumns', [] )
            ->with('orderBy', [] )
            ->with('dataTypeContent', [] )
            ->with('orderColumn', [] )
            ->with(compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
