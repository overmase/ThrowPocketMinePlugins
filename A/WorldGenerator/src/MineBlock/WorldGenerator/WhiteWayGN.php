<?php

namespace MineBlock\WorldGenerator;

use pocketmine\level\generator\Generator;
use pocketmine\level\generator\GenerationChunkManager;
use pocketmine\math\Vector3;
use pocketmine\utils\Random;
use pocketmine\block\Block;

class WhiteWayGN extends Generator{

	private $level, $options, $random, $floatSeed;

	public function getSettings(){
		return [];
	}

	public function getName(){
		return "whiteway";
	}

	public function __construct(array $option = []){}

	public function init(GenerationChunkManager $level, Random $random){
		$this->level = $level;
		$this->random = $random;
		$this->floatSeed = $this->random->nextFloat();
	}

	public function generateChunk($chunkX, $chunkZ){
		$chunk = $this->level->getChunk($chunkX, $chunkZ);
		for($z = 0; $z < 16; $z++){
			for($x = 0; $x < 16; $x++){
				$chunk->setBlockId($x, 0, $z, 7);
				$chunk->setBlockId($x, 1, $z, 3);
				$chunk->setBlockId($x, 2, $z, 2);
			}
		}
		foreach([[0, 1, 0, 155, 0], [0, 1, 1, 155, 0], [0, 1, 2, 155, 0], [0, 1, 3, 155, 0], [0, 1, 4, 155, 0], [0, 1, 5, 155, 0], [0, 1, 6, 155, 0], [0, 1, 7, 155, 0], [0, 1, 8, 155, 0], [0, 1, 9, 155, 0], [0, 1, 10, 155, 0], [0, 1, 11, 155, 0], [0, 1, 12, 155, 0], [0, 1, 13, 155, 0], [0, 1, 14, 155, 0], [0, 1, 15, 155, 0], [1, 0, 1, 89, 0], [1, 0, 2, 89, 0], [1, 0, 3, 89, 0], [1, 0, 4, 89, 0], [1, 0, 5, 89, 0], [1, 0, 6, 89, 0], [1, 0, 7, 89, 0], [1, 0, 8, 89, 0], [1, 0, 9, 89, 0], [1, 0, 10, 89, 0], [1, 0, 11, 89, 0], [1, 0, 12, 89, 0], [1, 0, 13, 89, 0], [1, 0, 14, 89, 0], [1, 1, 0, 155, 0], [1, 1, 1, 156, 7], [1, 1, 2, 156, 5], [1, 1, 3, 156, 5], [1, 1, 4, 156, 5], [1, 1, 5, 156, 5], [1, 1, 6, 156, 5], [1, 1, 7, 156, 5], [1, 1, 8, 156, 5], [1, 1, 9, 156, 5], [1, 1, 10, 156, 5], [1, 1, 11, 156, 5], [1, 1, 12, 156, 5], [1, 1, 13, 156, 5], [1, 1, 14, 156, 5], [1, 1, 15, 155, 0], [2, 0, 1, 89, 0], [2, 0, 14, 89, 0], [2, 1, 0, 155, 0], [2, 1, 1, 156, 7], [2, 1, 14, 156, 6], [2, 1, 15, 155, 0], [3, 0, 1, 89, 0], [3, 0, 14, 89, 0], [3, 1, 0, 155, 0], [3, 1, 1, 156, 7], [3, 1, 14, 156, 6], [3, 1, 15, 155, 0], [4, 0, 1, 89, 0], [4, 0, 14, 89, 0], [4, 1, 0, 155, 0], [4, 1, 1, 156, 7], [4, 1, 14, 156, 6], [4, 1, 15, 155, 0], [5, 0, 1, 89, 0], [5, 0, 14, 89, 0], [5, 1, 0, 155, 0], [5, 1, 1, 156, 7], [5, 1, 14, 156, 6], [5, 1, 15, 155, 0], [6, 0, 1, 89, 0], [6, 0, 14, 89, 0], [6, 1, 0, 155, 0], [6, 1, 1, 156, 7], [6, 1, 14, 156, 6], [6, 1, 15, 155, 0], [7, 0, 1, 89, 0], [7, 0, 14, 89, 0], [7, 1, 0, 155, 0], [7, 1, 1, 156, 7], [7, 1, 14, 156, 6], [7, 1, 15, 155, 0], [8, 0, 1, 89, 0], [8, 0, 14, 89, 0], [8, 1, 0, 155, 0], [8, 1, 1, 156, 7], [8, 1, 14, 156, 6], [8, 1, 15, 155, 0], [9, 0, 1, 89, 0], [9, 0, 14, 89, 0], [9, 1, 0, 155, 0], [9, 1, 1, 156, 7], [9, 1, 14, 156, 6], [9, 1, 15, 155, 0], [10, 0, 1, 89, 0], [10, 0, 14, 89, 0], [10, 1, 0, 155, 0], [10, 1, 1, 156, 7], [10, 1, 14, 156, 6], [10, 1, 15, 155, 0], [11, 0, 1, 89, 0], [11, 0, 14, 89, 0], [11, 1, 0, 155, 0], [11, 1, 1, 156, 7], [11, 1, 14, 156, 6], [11, 1, 15, 155, 0], [12, 0, 1, 89, 0], [12, 0, 14, 89, 0], [12, 1, 0, 155, 0], [12, 1, 1, 156, 7], [12, 1, 14, 156, 6], [12, 1, 15, 155, 0], [13, 0, 1, 89, 0], [13, 0, 14, 89, 0], [13, 1, 0, 155, 0], [13, 1, 1, 156, 7], [13, 1, 14, 156, 6], [13, 1, 15, 155, 0], [14, 0, 1, 89, 0], [14, 0, 2, 89, 0], [14, 0, 3, 89, 0], [14, 0, 4, 89, 0], [14, 0, 5, 89, 0], [14, 0, 6, 89, 0], [14, 0, 7, 89, 0], [14, 0, 8, 89, 0], [14, 0, 9, 89, 0], [14, 0, 10, 89, 0], [14, 0, 11, 89, 0], [14, 0, 12, 89, 0], [14, 0, 13, 89, 0], [14, 0, 14, 89, 0], [14, 1, 0, 155, 0], [14, 1, 1, 156, 4], [14, 1, 2, 156, 4], [14, 1, 3, 156, 4], [14, 1, 4, 156, 4], [14, 1, 5, 156, 4], [14, 1, 6, 156, 4], [14, 1, 7, 156, 4], [14, 1, 8, 156, 4], [14, 1, 9, 156, 4], [14, 1, 10, 156, 4], [14, 1, 11, 156, 4], [14, 1, 12, 156, 4], [14, 1, 13, 156, 4], [14, 1, 14, 156, 6], [14, 1, 15, 155, 0], [15, 1, 0, 155, 0], [15, 1, 1, 155, 0], [15, 1, 2, 155, 0], [15, 1, 3, 155, 0], [15, 1, 4, 155, 0], [15, 1, 5, 155, 0], [15, 1, 6, 155, 0], [15, 1, 7, 155, 0], [15, 1, 8, 155, 0], [15, 1, 9, 155, 0], [15, 1, 10, 155, 0], [15, 1, 11, 155, 0], [15, 1, 12, 155, 0], [15, 1, 13, 155, 0], [15, 1, 14, 155, 0], [15, 1, 15, 155, 0]] as $b){
			$chunk->setBlockId($b[0], $b[1] + 1, $b[2], $b[3]);
			$chunk->setBlockData($b[0], $b[1] + 1, $b[2], $b[4]);
		}
		$this->random->setSeed((int) (($chunkX * 0xdead + $chunkZ * 0xbeef) * $this->floatSeed));
	}

	public function populateChunk($chunkX, $chunkZ){}

	public function getSpawn(){
		return new Vector3(132, 40, 132);
	}
}