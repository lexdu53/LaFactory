package org.lafactory.dao;

import org.lafactory.entities.Users;
import org.springframework.data.jpa.repository.JpaRepository;

public interface UsersRepository
extends JpaRepository<Users, Integer>{

}
