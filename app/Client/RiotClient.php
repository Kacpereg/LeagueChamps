<?php

namespace App\Client;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\Base\Definitions\Region;
use RiotAPI\LeagueAPI\Objects\ProviderRegistrationParameters;
use RiotAPI\LeagueAPI\Objects\TournamentRegistrationParameters;


class RiotClient
{
//  Include all required files (installation via Composer is required)


    public function libInit(User $user)
    {

//  Initialize the library
        $api = new LeagueAPI([
            //  Your API key, you can get one at https://developer.riotgames.com/
            LeagueAPI::SET_KEY => 'RGAPI-1ca57aed-f312-4666-9603-de3cc7aaba2d',
            //  Target region (you can change it during lifetime of the library instance)
            LeagueAPI::SET_REGION => strtolower($user->server),
        ]);

        return $api;

    }

    public function getRank(User $user){
        //  And now you are ready to rock!
        $api=$this->libInit($user);
        $summoner = $api->getSummonerByName($user->ign);
        $ranks=$api->getLeagueEntriesForSummoner($summoner->id);

        $tier='unranked';
        $number='';
        $lp='';
        if($ranks !== []){
            $tier = $ranks[0]->tier;
            $number = $ranks[0]->rank;
            $lp = $ranks[0]->leaguePoints;
        }

        $rank="{$tier} {$number} {$lp}";
        return $rank;
    }

    public function getEntries(User $user){

        $api=$this->libInit($user);
        $summoner = $api->getSummonerByName($user->ign);
        $ranks=$api->getLeagueEntriesForSummoner($summoner->id);
        $tier='UNRANKED';
        $number='';
        $lp='';
        $mmr=300;

        if($ranks !== []){
            $tier = $ranks[0]->tier;
            $number = $ranks[0]->rank;
            $lp = $ranks[0]->leaguePoints;
            if ($number === 'I'){
                $number = 1;
            }
            if ($number === 'II'){
                $number = 2;
            }
            if ($number === 'III'){
                $number = 3;
            }
            if ($number === 'IV'){
                $number = 4;
            }

            if($tier === 'MASTER' || $tier === 'GRANDMASTER' || $tier === 'CHALLENGER'){
                $mmr = 3107 + $lp;
            }
            if($tier === 'DIAMOND'){
                $mmr = 2605 + (5-$number)*100 + $lp;
            }
            if($tier === 'PLATINUM'){
                $mmr = 2104 + (5-$number)*100 + $lp;
            }
            if($tier === 'GOLD'){
                $mmr = 1603 + (5-$number)*100 + $lp;
            }
            if($tier === 'SILVER'){
                $mmr = 1102 + (5-$number)*100 + $lp;
            }
            if($tier === 'BRONZE'){
                $mmr = 601 + (5-$number)*100 + $lp;
            }
            if($tier === 'IRON'){
                $mmr = 100 + (5-$number)*100 + $lp;
            }


        }

        if($ranks !== []){
            $tier = $ranks[0]->tier;
            $number = $ranks[0]->rank;
            $lp = $ranks[0]->leaguePoints;
        }

        $rank="{$tier} {$number} {$lp}";


        $rank=[$rank,$mmr];
        return $rank;
    }

}
