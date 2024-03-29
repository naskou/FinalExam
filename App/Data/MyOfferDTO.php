<?php

    namespace App\Data;

    class MyOfferDTO
    {
        private $id;
        private $price;
        private $days;
        private $description;
        private $picture_url;
        private $room;
        private $town;
        private $userId;
        private $isOccupied;
        private $addedOn;

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id): void
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getPrice()
        {
            return $this->price;
        }

        /**
         * @param mixed $price
         */
        public function setPrice($price): void
        {
            $this->price = $price;
        }

        /**
         * @return mixed
         */
        public function getDays()
        {
            return $this->days;
        }

        /**
         * @param mixed $days
         */
        public function setDays($days): void
        {
            $this->days = $days;
        }

        /**
         * @return mixed
         */
        public function getDescription()
        {
            return $this->description;
        }

        /**
         * @param mixed $description
         */
        public function setDescription($description): void
        {
            $this->description = $description;
        }

        /**
         * @return mixed
         */
        public function getPictureUrl()
        {
            return $this->picture_url;
        }

        /**
         * @param mixed $picture_url
         */
        public function setPictureUrl($picture_url): void
        {
            $this->picture_url = $picture_url;
        }

        /**
         * @return mixed
         */
        public function getRoom()
        {
            return $this->room;
        }

        /**
         * @param mixed $room
         */
        public function setRoom($room): void
        {
            $this->room = $room;
        }

        /**
         * @return mixed
         */
        public function getTown()
        {
            return $this->town;
        }

        /**
         * @param mixed $town
         */
        public function setTown($town): void
        {
            $this->town = $town;
        }

        /**
         * @return mixed
         */
        public function getUserId()
        {
            return $this->userId;
        }

        /**
         * @param mixed $userId
         */
        public function setUserId($userId): void
        {
            $this->userId = $userId;
        }

        /**
         * @return mixed
         */
        public function getIsOccupied()
        {
            if ($this->isOccupied == 1) {
                return "No";
            } else {
                return "Yes";
            }
            return $this->isOccupied;
        }

        /**
         * @param mixed $isOccupied
         */
        public function setIsOccupied($isOccupied): void
        {
            $this->isOccupied = $isOccupied;
        }

        /**
         * @return mixed
         */
        public function getAddedOn()
        {
            return $this->addedOn;
        }

        /**
         * @param mixed $addedOn
         */
        public function setAddedOn($addedOn): void
        {
            $this->addedOn = $addedOn;
        }
    }