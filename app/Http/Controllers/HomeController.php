<?php

namespace App\Http\Controllers;

use App\Http\Resources\VideoCollection;
use App\RecommendVideos;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Game;
use App\RecommendGames;
use App\Http\Resources\GameCollection;

class HomeController extends ApiController
{
    //

    public function index()
    {
    }

    public function recommend_games()
    {
        $recommend_id = RecommendGames::all()->pluck('game_id')->toArray();

        if (count($recommend_id) > 0) {
            return new GameCollection(Game::whereIn('id', $recommend_id)->paginate(5));
        }
        else {
            return response()->json(
                [
                    'code'  => 404,
                    'message' => 'no recommend games found',
                ]
            );
        }
    }

    public function recommend_videos()
    {
        $recommend_id = RecommendVideos::all()->pluck('video_id')->toArray();

        if (count($recommend_id) > 0) {
            return new VideoCollection(Video::whereIn('id', $recommend_id)->paginate(5));
        }
        else {
            return response()->json(
                [
                    'code'  => 404,
                    'message' => 'no recommend videos found',
                ]
            );
        }
    }

    /*
     * method post
     * parameter  {"uuid":1,"bundle_identifier":["hahn.com","botsford.info"]}
     */

    public function installed_list(Request $request)
    {
        $conditions = [
            "uuid"              => "required",
            "bundle_identifier" => "required",
        ];

        $request_data = $request->json()->all();

        $validator = Validator::make(
            $request_data,
            $conditions
        );

        if ($validator->fails()) {
            return response()->json(
                [
                    'code' => 400,
                    'message' => $validator->errors(),
                ]
            );
        }

        $uuid  = $request_data['uuid'];
        $lists = $request_data['bundle_identifier'];

        $game_id = Game::whereIn('bundle_identifier', $lists)->pluck('id')->toArray();

        print_r($game_id);

    }
}
